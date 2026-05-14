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
        
        console.log("JSON Serialized:", JSON.stringify(panier));
    }
});
</script>

</body>
</html>