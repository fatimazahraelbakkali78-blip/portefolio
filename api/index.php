<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="boutique.php" class="btn">Voir Projet</a>
</body>
</html><?php
// Simulation de l'API JSON pour Vercel
if (isset($_GET['get_tvs'])) {
    header('Content-Type: application/json');
    $tvs = [
        ["nom" => "SAMSUNG QLED QE65Q80AA", "prix" => 14399.20, "image" => "https://m.media-amazon.com/images/I/819XYUbg8fL._AC_SL1500_.jpg"],
        ["nom" => "LG OLED EVO C3", "prix" => 12900.00, "image" => "https://m.media-amazon.com/images/I/815uStvD6VL._AC_SL1500_.jpg"],
        ["nom" => "SONY BRAVIA XR A80L", "prix" => 17500.00, "image" => "https://m.media-amazon.com/images/I/81L8pS+K00L._AC_SL1500_.jpg"]
    ];
    echo json_encode($tvs);
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander des Tvs</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        /* Style personnalisé pour matcher l'exercice */
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .app-container { max-width: 1000px; margin: 40px auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .header-title { border-bottom: 2px solid #eee; padding-bottom: 15px; margin-bottom: 25px; font-weight: 700; color: #333; }
        .tv-thumbnail { width: 70px; height: auto; border-radius: 4px; border: 1px solid #ddd; }
        .panier-header { background-color: #f8f9fa; font-weight: bold; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
        .total-section { background: #343a40; color: white; padding: 20px; border-radius: 8px; margin-top: 30px; }
        .btn-add { transition: all 0.3s; }
        .btn-add:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3); }
    </style>
</head>
<body>

<div class="container app-container">
    <h1 class="header-title">Commander des Tvs</h1>

    <!-- Formulaire de sélection -->
    <div class="row g-3 mb-5 p-3 border rounded-3 bg-light">
        <div class="col-md-6">
            <label class="form-label fw-bold text-secondary">TVS</label>
            <select id="tvSelect" class="form-select form-select-lg">
                <option value="">Chargement des modèles...</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold text-secondary">Quantité</label>
            <input type="number" id="quantite" class="form-control form-select-lg" value="1" min="1" max="10">
        </div>
        <div class="col-md-3 d-flex align-items-end">
            <button id="btnAjouter" class="btn btn-primary btn-lg w-100 btn-add">Ajouter au panier</button>
        </div>
    </div>

    <!-- Tableau du Panier -->
    <div class="table-responsive">
        <table id="panierTable" class="table align-middle">
            <thead class="panier-header">
                <tr>
                    <th style="width: 40%;">NOM</th>
                    <th style="width: 15%;">QUANTITÉ</th>
                    <th style="width: 20%;">IMAGE</th>
                    <th style="width: 25%; text-align: center;">ACTION</th>
                </tr>
            </thead>
            <tbody id="panierBody">
                <!-- Vide au début -->
            </tbody>
        </table>
    </div>

    <!-- Affichage des Totaux -->
    <div class="row">
        <div class="col-md-5 ms-auto">
            <div class="total-section">
                <div class="d-flex justify-content-between mb-2">
                    <span>Total HT:</span>
                    <span class="fw-bold"><span id="totalHT">0.00</span> DH</span>
                </div>
                <div class="d-flex justify-content-between border-top pt-2">
                    <span class="h5">Total TTC:</span>
                    <span class="h5 fw-bold text-warning"><span id="totalTTC">0.00</span> DH</span>
                </div>
                <small class="text-white-50 mt-2 d-block">* TVA incluse (20%)</small>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    let panier = [];

    // Remplir le dropdown via AJAX
    function remplirTVs() {
        $.getJSON('index.php?get_tvs=1', function(data) {
            let options = '<option value="">-- Sélectionnez un modèle --</option>';
            $.each(data, function(i, tv) {
                options += `<option value="${tv.nom}" data-prix="${tv.prix}" data-img="${tv.image}">${tv.nom}</option>`;
            });
            $('#tvSelect').html(options);
        });
    }
    remplirTVs();

    // Ajouter au panier
    $('#btnAjouter').click(function() {
        const tvName = $('#tvSelect').val();
        const qte = parseInt($('#quantite').val());

        if (!tvName) { alert("Sélectionnez une TV !"); return; }
        if (qte < 1 || qte > 10) { alert("Quantité entre 1 et 10 !"); return; }

        const selected = $('#tvSelect option:selected');
        const item = {
            nom: tvName,
            prix: parseFloat(selected.data('prix')),
            quantite: qte,
            image: selected.data('img')
        };

        panier.push(item);
        majAffichage();
    });

    // Supprimer du panier
    $(document).on('click', '.btn-delete', function() {
        const index = $(this).data('index');
        panier.splice(index, 1);
        majAffichage();
    });

    // Mettre à jour l'interface
    function majAffichage() {
        let rows = "";
        let totalHT = 0;

        $.each(panier, function(i, item) {
            totalHT += item.prix * item.quantite;
            rows += `
                <tr>
                    <td class="fw-bold text-dark">${item.nom}</td>
                    <td><span class="badge bg-secondary p-2">${item.quantite}</span></td>
                    <td><img src="${item.image}" class="tv-thumbnail shadow-sm"></td>
                    <td class="text-center">
                        <button class="btn btn-outline-danger btn-sm btn-delete px-3" data-index="${i}">
                            Supprimer
                        </button>
                    </td>
                </tr>`;
        });

        $('#panierBody').html(rows);
        $('#totalHT').text(totalHT.toLocaleString('fr-FR', {minimumFractionDigits: 2}));
        $('#totalTTC').text((totalHT * 1.20).toLocaleString('fr-FR', {minimumFractionDigits: 2}));

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="glass p-6 rounded-3xl hover-card transition-all duration-300 border border-white/5">
                <div class="h-32 bg-indigo-900/20 rounded-2xl mb-6 flex items-center justify-center">
                    <i class="fas fa-folder-open text-4xl text-indigo-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Atelier 1</h3>
                <p class="text-gray-400 text-sm mb-6">Introduction aux bases de PHP et gestion des fichiers texte.</p>
                
                <div class="space-y-4">
                    <div class="flex flex-col gap-2">
                        <span class="text-[10px] text-gray-500 font-bold uppercase">Exercices Standards</span>
                        <div class="flex justify-between items-center bg-white/5 p-2 rounded-lg">
                            <span class="text-sm font-medium">Ex 1 & 2</span>
                            <div class="flex gap-3">
                                <a href="exercice1.php" class="text-indigo-400 hover:text-white text-xs"><i class="fas fa-code"></i></a>
                                <a href="Rapport Exercice1.pdf" class="text-red-400 hover:text-white text-xs"><i class="fas fa-file-pdf"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 pt-2 border-t border-white/5">
                        <span class="text-[10px] text-indigo-400 font-bold uppercase">Série des TDs</span>
                        <div class="grid grid-cols-2 gap-2">
                            <?php for($i=1; $i<=13; $i++): ?>
                            <div class="flex justify-between items-center bg-indigo-500/5 p-2 rounded-lg">
                                <span class="text-[10px]">TD <?=$i?></span>
                                <div class="flex gap-2">
                                    <a href="td<?=$i?>_Atelier1.php" class="text-indigo-500"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass p-6 rounded-3xl hover-card transition-all duration-300 border border-white/5">
                <div class="h-32 bg-blue-900/20 rounded-2xl mb-6 flex items-center justify-center">
                    <i class="fas fa-database text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Ateliers 2 & 3</h3>
                <p class="text-gray-400 text-sm mb-6">Action formulaires, liens hypertextes et manipulation des données.</p>
                
                <div class="space-y-3">
                    <?php 
                    $ateliers = [3 => "Ex 3", 4 => "Ex 4", 5 => "Ex 5", 6 => "Ex 6"];
                    foreach($ateliers as $num => $label): ?>
                    <div class="flex justify-between items-center bg-white/5 p-3 rounded-xl">
                        <span class="font-bold text-sm"><?=$label?></span>
                        <div class="flex gap-4">
                            <a href="exercice<?=$num?>.php" class="text-indigo-400 text-xs font-bold uppercase hover:underline">Code</a>
                            <a href="Rapport Exercice<?=$num?>.pdf" class="text-red-400 text-xs font-bold uppercase hover:underline">PDF</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="glass p-6 rounded-3xl hover-card transition-all duration-300 border border-white/5">
                <div class="h-32 bg-emerald-900/20 rounded-2xl mb-6 flex items-center justify-center">
                    <i class="fas fa-server text-4xl text-emerald-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Gestion Dynamique</h3>
                <p class="text-gray-400 text-sm mb-6">Optimisation des contenus et sécurité (Ateliers 4 à 7).</p>
                
                <div class="max-h-[250px] overflow-y-auto pr-2 space-y-2 custom-scrollbar">
                    <?php 
                    $advanced = [7, 8, 9, 10, 11, 12, 13, 14];
                    foreach($advanced as $ex): ?>
                    <div class="flex justify-between items-center bg-emerald-500/5 p-2 rounded-lg border border-emerald-500/10">
                        <span class="text-xs font-bold">Exercice <?=$ex?></span>
                        <a href="exercice<?=$ex?>.php" class="text-emerald-400 hover:text-white transition"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </finction>
<hr>
  <div id="skills" class="card">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">Compétences Techniques</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="glass p-6 rounded-2xl text-center">Python / PHP</div>
                <div class="glass p-6 rounded-2xl text-center">JavaScript / HTML</div>
                <div class="glass p-6 rounded-2xl text-center">SQL / Databases</div>
                <div class="glass p-6 rounded-2xl text-center">Tailwind / UI</div>
            </div>
        </div>
    </div>
     <hr></hr>

      <div class="grid md:grid-cols-3 gap-8"> 
     <div class="glass p-4 rounded-3xl hover-card transition-all duration-300" style="border-color: #6366f1;">
            <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6">
                <img src="/6084414.jpg" alt="Atelier 3" style="height:200px">
            </div>
           
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1> mon_store</h1>
                <span class="text-indigo-400"> <a href="https://github.com/fatimazahraelbakkali78-blip/My_store.git">voir le projet  </a> </span>
            </div>
        </div>

    <section id="contact" class="py-24 px-6 text-center">
        <div class="max-w-2xl mx-auto glass p-12 rounded-3xl border border-indigo-500/20">
            <h2 class="text-3xl font-bold mb-4 text-white">Prêt à démarrer ?</h2>
            <p class="text-gray-400 mb-8 font-medium">Projet d'Innovation Entrepreneuriale - OFPPT 2026</p>
            <a href="mailto:votre.email@example.com" class="inline-block bg-indigo-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-indigo-500 transition shadow-lg shadow-indigo-500/20">Contact Direct</a>
        </div>
    </section>

    <footer class="py-12 border-t border-white/5 text-center text-gray-500 text-xs tracking-widest uppercase font-bold">
        © 2026 Fatima Zohra El Bakkali | Developed with Tailwind CSS
    </footer>

        console.log("JSON Serialized:", JSON.stringify(panier));
    }
}');'
</script>

</body>
</html>