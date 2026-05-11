<?php
session_start();
$conn = new mysqli("localhost", "root", "", "boutique_db", 3307);

if (!isset($_SESSION['panier'])) { $_SESSION['panier'] = []; }

if (isset($_POST['ajouter'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $qte = $_POST['quantite'];
    $img = $_POST['image'];

    $_SESSION['panier'][] = [
        'id' => $id, 'nom' => $nom, 'prix' => $prix, 
        'qte' => $qte, 'img' => $img, 'total' => $prix * $qte
    ];
}

if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
    header("Location: boutique.php");
}

$produits = $conn->query("SELECT * FROM produits");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Boutique Pro | Fatima Zohra</title>
</head>
<body class="bg-[#0f172a] text-slate-200 min-h-screen p-8 font-sans">

    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-black mb-12 text-indigo-500 uppercase tracking-tighter italic text-center">Store Online .</h1>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <?php while($row = $produits->fetch_assoc()): ?>
            <div class="bg-slate-800/50 backdrop-blur-md rounded-3xl p-5 border border-slate-700 hover:border-indigo-500 transition-all group">
                <div class="h-56 overflow-hidden rounded-2xl mb-6 shadow-2xl">
                    <img src="<?php echo $row['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold"><?php echo $row['nom']; ?></h3>
                    <span class="text-indigo-400 font-black"><?php echo $row['prix']; ?> DH</span>
                </div>
                
                <form method="POST" class="space-y-4">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="nom" value="<?php echo $row['nom']; ?>">
                    <input type="hidden" name="prix" value="<?php echo $row['prix']; ?>">
                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                    
                    <div class="flex items-center gap-4 bg-slate-900/50 p-2 rounded-xl border border-slate-700">
                        <span class="text-xs font-bold text-slate-500 pl-2">QTY:</span>
                        <input type="number" name="quantite" value="1" min="1" max="<?php echo $row['stock']; ?>" 
                               class="bg-transparent w-full border-none focus:ring-0 text-center font-bold text-indigo-400">
                    </div>
                    <button type="submit" name="ajouter" class="w-full bg-indigo-600 hover:bg-indigo-500 py-4 rounded-2xl font-black uppercase text-xs tracking-widest transition-all">
                        Ajouter au Panier
                    </button>
                </form>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="bg-slate-800/30 backdrop-blur-xl rounded-[2.5rem] border border-slate-700 overflow-hidden shadow-2xl">
            <div class="p-8 border-b border-slate-700 flex justify-between items-center">
                <h2 class="text-2xl font-black tracking-tight italic">Votre Panier Client</h2>
                <a href="?vider=1" class="text-[10px] bg-red-500/10 text-red-400 px-5 py-2 rounded-lg font-black hover:bg-red-500 hover:text-white transition uppercase">Vider</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] uppercase font-black tracking-[0.2em] text-slate-500 border-b border-slate-700">
                            <th class="p-8">Article</th>
                            <th class="p-8 text-center">Quantité</th>
                            <th class="p-8 text-right">Sous-Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/50">
                        <?php 
                        $grandTotal = 0;
                        if(empty($_SESSION['panier'])): ?>
                            <tr><td colspan="3" class="p-20 text-center text-slate-500 italic">Aucun article sélectionné.</td></tr>
                        <?php else: 
                            foreach($_SESSION['panier'] as $p): 
                                $grandTotal += $p['total']; ?>
                            <tr class="hover:bg-indigo-500/5 transition-colors">
                                <td class="p-8">
                                    <div class="flex items-center gap-5">
                                        <img src="<?php echo $p['img']; ?>" class="w-14 h-14 rounded-2xl object-cover border border-slate-600 shadow-lg">
                                        <span class="font-bold text-slate-200"><?php echo $p['nom']; ?></span>
                                    </div>
                                </td>
                                <td class="p-8 text-center font-black text-indigo-400"><?php echo $p['qte']; ?></td>
                                <td class="p-8 text-right font-black text-slate-100"><?php echo number_format($p['total'], 2); ?> DH</td>
                            </tr>
                        <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="p-10 bg-slate-900/50 border-t border-slate-700 flex justify-between items-center">
                <div>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">Total Final</p>
                    <p class="text-5xl font-black text-indigo-500"><?php echo number_format($grandTotal, 2); ?> <span class="text-sm italic">DH</span></p>
                </div>
                <button class="bg-indigo-600 px-12 py-5 rounded-2xl font-black uppercase text-xs tracking-widest hover:scale-105 transition shadow-lg shadow-indigo-500/20">
                    Valider le Paiement <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>

</body>
</html>