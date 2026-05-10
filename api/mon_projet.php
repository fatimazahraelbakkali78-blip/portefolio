<?php
session_start();
// Connexion (Akdi l-Port dyalk 3306 aw 3307)
$conn = new mysqli("localhost", "root", "", "boutique_db", 3307);

if (!isset($_SESSION['panier'])) { $_SESSION['panier'] = []; }

// Ajouter au panier logic
if (isset($_POST['ajouter'])) {
    $_SESSION['panier'][] = [
        'nom' => $_POST['nom'], 'prix' => $_POST['prix'], 
        'qte' => $_POST['quantite'], 'img' => $_POST['image'], 
        'total' => $_POST['prix'] * $_POST['quantite']
    ];
}

// Vider le panier
if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
    header("Location: index.php#store");
}

$produits = $conn->query("SELECT * FROM produits");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio & Store | Fatima Zohra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #020617; color: #f8fafc; scroll-behavior: smooth; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .gradient-bg { background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #020617 100%); }
        .hover-card:hover { border-color: #6366f1; background: rgba(99, 102, 241, 0.05); transform: translateY(-5px); }
    </style>
</head>
<body class="gradient-bg">

    <nav class="fixed w-full z-50 p-6">
        <div class="max-w-6xl mx-auto glass rounded-2xl px-8 py-4 flex justify-between items-center">
            <div class="text-2xl font-black text-indigo-500 tracking-tighter">DEV.PRO</div>
            <div class="flex gap-8 text-sm font-medium">
                <a href="#hero" class="hover:text-indigo-400">Accueil</a>
                <a href="#ateliers" class="hover:text-indigo-400">Ateliers</a>
                <a href="#store" class="hover:text-indigo-400 text-indigo-400 font-bold">Ma Boutique</a>
            </div>
        </div>
    </nav>

    <div id="hero" class="pt-40 pb-20 px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-extrabold mb-6 tracking-tighter italic">Design. <span class="text-indigo-500">Code.</span> Store.</h1>
        <p class="text-gray-400 text-lg max-w-2xl mx-auto mb-10">Portfolio professionnel de Fatima Zohra El Bakkali - Projets PHP & E-commerce.</p>
    </div>

    <div id="ateliers" class="max-w-6xl mx-auto p-6 mb-20">
        <h2 class="text-3xl font-bold mb-10 border-l-4 border-indigo-500 pl-4 uppercase tracking-widest">Travaux Pratiques</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <?php for($i=1; $i<=3; $i++): ?>
            <div class="glass p-6 rounded-3xl hover-card transition-all">
                <h3 class="text-xl font-bold mb-4 italic">Atelier <?=$i?></h3>
                <div class="flex flex-col gap-3">
                    <a href="exercice<?=$i?>.php" class="text-sm text-indigo-300 hover:underline"><i class="fas fa-file-code mr-2"></i> Code PHP</a>
                    <a href="Rapport Exercice<?=$i?>.pdf" class="text-sm text-red-400 hover:underline"><i class="fas fa-file-pdf mr-2"></i> Rapport PDF</a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div id="store" class="max-w-6xl mx-auto p-6 pt-20">
        <h2 class="text-3xl font-bold mb-10 border-l-4 border-indigo-500 pl-4 uppercase tracking-widest">Digital <span class="text-indigo-500 font-black">Store</span></h2>
        
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <?php while($row = $produits->fetch_assoc()): ?>
            <div class="glass p-4 rounded-[2.5rem] hover-card transition-all">
                <img src="<?=$row['image']?>" class="w-full h-48 object-cover rounded-[2rem] mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-lg"><?=$row['nom']?></h3>
                    <span class="text-indigo-400 font-black"><?=$row['prix']?> DH</span>
                </div>
                <form method="POST" class="space-y-4">
                    <input type="hidden" name="nom" value="<?=$row['nom']?>">
                    <input type="hidden" name="prix" value="<?=$row['prix']?>">
                    <input type="hidden" name="image" value="<?=$row['image']?>">
                    <input type="number" name="quantite" value="1" min="1" class="w-full bg-white/5 border border-white/10 rounded-xl p-2 text-center text-sm font-bold">
                    <button type="submit" name="ajouter" class="w-full bg-indigo-600 hover:bg-indigo-500 py-3 rounded-xl font-bold text-xs uppercase tracking-widest transition">
                        Ajouter au panier
                    </button>
                </form>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="glass rounded-[2.5rem] overflow-hidden mb-20 shadow-2xl shadow-indigo-500/10">
            <div class="p-8 border-b border-white/10 flex justify-between items-center">
                <h3 class="text-xl font-bold tracking-widest"><i class="fas fa-shopping-cart mr-3"></i> PANIER CLIENT</h3>
                <a href="?vider=1" class="text-[10px] bg-red-500/20 text-red-400 px-4 py-2 rounded-lg font-bold hover:bg-red-500 hover:text-white transition">VIDER</a>
            </div>
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-white/5 text-[10px] uppercase font-black tracking-[0.2em] text-gray-500 border-b border-white/10">
                        <th class="p-6">Produit</th>
                        <th class="p-6 text-center">Quantité</th>
                        <th class="p-6 text-right">Sous-Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php 
                    $totalGeneral = 0;
                    foreach($_SESSION['panier'] as $item): 
                        $totalGeneral += $item['total'];
                    ?>
                    <tr>
                        <td class="p-6">
                            <div class="flex items-center gap-4">
                                <img src="<?=$item['img']?>" class="w-10 h-10 rounded-lg object-cover">
                                <span class="font-medium text-sm"><?=$item['nom']?></span>
                            </div>
                        </td>
                        <td class="p-6 text-center font-bold text-indigo-400"><?=$item['qte']?></td>
                        <td class="p-6 text-right font-black"><?=number_format($item['total'], 2)?> DH</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div class="p-10 bg-indigo-600/10 flex justify-between items-center">
                <div>
                    <p class="text-[10px] font-bold text-indigo-300 uppercase tracking-[0.3em]">Total Général</p>
                    <p class="text-4xl font-black italic"><?=number_format($totalGeneral, 2)?> <span class="text-sm">DH</span></p>
                </div>
                <button class="bg-indigo-600 px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 transition shadow-lg shadow-indigo-500/30">
                    Valider la commande <i class="fas fa-chevron-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <footer class="py-10 text-center border-t border-white/5 text-gray-600 text-[10px] font-bold uppercase tracking-widest">
        © 2026 Developed by Fatima Zohra El Bakkali
    </footer>

</body>
</html>