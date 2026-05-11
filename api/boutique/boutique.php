<?php
session_start();

// 1. Data dyal s-sel3a (Static bach i-khdem f Vercel)
$articles = [
    ['id' => 1, 'nom' => 'Veste Jean Modern', 'prix' => 450, 'image' => 'veste.jpg'],
    ['id' => 2, 'nom' => 'Pantalon Cargo Black', 'prix' => 320, 'image' => 'cargo.jpg'],
    ['id' => 3, 'nom' => 'Sneakers White', 'prix' => 600, 'image' => 'shoes.jpg']
];

// 2. Logique dyal l-Panier (Ajouter)
if (isset($_POST['ajouter'])) {
    $id = $_POST['id'];
    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]['qte'] += $_POST['qte'];
    } else {
        $_SESSION['panier'][$id] = [
            'nom' => $_POST['nom'],
            'prix' => $_POST['prix'],
            'qte' => $_POST['qte'],
            'img' => $_POST['img']
        ];
    }
    header("Location: boutique.php#panier"); // I-hbet nichan l l-jadwal
    exit();
}

// 3. Vider le panier
if (isset($_GET['vider'])) {
    unset($_SESSION['panier']);
    header("Location: boutique.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutique Chic | Fatima Zohra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#020617] text-slate-200 font-sans min-h-screen selection:bg-indigo-500/30">

    <nav class="p-6 border-b border-white/10 bg-slate-900/40 backdrop-blur-xl sticky top-0 z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-black text-indigo-500 tracking-tighter italic">FASHION.PRO</h1>
            <div class="flex items-center gap-6">
                <a href="index.php" class="text-xs font-bold hover:text-indigo-400 uppercase tracking-widest transition">Accueil</a>
                <a href="logout.php" class="bg-red-500/10 text-red-400 px-4 py-2 rounded-xl text-[10px] font-black border border-red-500/20 hover:bg-red-500 hover:text-white transition">LOGOUT</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto p-8">
        
        <div class="mb-12">
            <h2 class="text-xl font-bold mb-8 text-indigo-400 uppercase tracking-widest flex items-center gap-3">
                <span class="h-px w-8 bg-indigo-500"></span> Articles Disponibles
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach($articles as $a): ?>
                <div class="bg-white/[0.03] border border-white/10 p-5 rounded-[2.5rem] hover:border-indigo-500/50 transition-all duration-500 group">
                    <div class="h-56 rounded-[2rem] overflow-hidden mb-6">
                        <img src="<?php echo $a['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="flex justify-between items-center mb-6 px-2">
                        <h3 class="font-bold text-lg"><?php echo $a['nom']; ?></h3>
                        <span class="text-indigo-400 font-black text-xl"><?php echo $a['prix']; ?> DH</span>
                    </div>
                    <form method="POST" class="space-y-4">
                        <input type="hidden" name="id" value="<?php echo $a['id']; ?>">
                        <input type="hidden" name="nom" value="<?php echo $a['nom']; ?>">
                        <input type="hidden" name="prix" value="<?php echo $a['prix']; ?>">
                        <input type="hidden" name="img" value="<?php echo $a['image']; ?>">
                        
                        <div class="flex items-center bg-black/40 rounded-2xl p-1 border border-white/5">
                            <span class="px-4 text-[10px] font-black text-slate-500 uppercase">Qte</span>
                            <input type="number" name="qte" value="1" min="1" class="w-full bg-transparent border-none focus:ring-0 text-center font-bold text-indigo-400">
                        </div>
                        
                        <button name="ajouter" class="w-full bg-indigo-600 hover:bg-indigo-500 py-4 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition-all">
                            Ajouter au Panier
                        </button>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="panier" class="pt-10">
            <div class="bg-white/[0.02] border border-white/10 rounded-[3rem] overflow-hidden shadow-2xl">
                <div class="p-8 border-b border-white/5 flex justify-between items-center bg-white/[0.01]">
                    <h2 class="text-2xl font-black italic tracking-tighter">Ma Commande</h2>
                    <a href="?vider=1" class="text-[10px] font-black text-slate-500 hover:text-red-400 transition uppercase tracking-widest">Vider</a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[10px] uppercase font-black tracking-[0.3em] text-slate-600 border-b border-white/5">
                                <th class="p-8">Article</th>
                                <th class="p-8 text-center">Quantité</th>
                                <th class="p-8 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <?php 
                            $grandTotal = 0;
                            if(empty($_SESSION['panier'])): ?>
                                <tr><td colspan="3" class="p-20 text-center text-slate-600 italic">Votre panier est vide.</td></tr>
                            <?php else: 
                                foreach($_SESSION['panier'] as $item): 
                                $st = $item['prix'] * $item['qte'];
                                $grandTotal += $st; ?>
                                <tr class="hover:bg-white/[0.02] transition-colors">
                                    <td class="p-8">
                                        <div class="flex items-center gap-5">
                                            <img src="<?php echo $item['img']; ?>" class="w-12 h-12 rounded-2xl object-cover border border-white/10 shadow-lg">
                                            <span class="font-bold text-slate-200"><?php echo $item['nom']; ?></span>
                                        </div>
                                    </td>
                                    <td class="p-8 text-center font-black text-indigo-400"><?php echo $item['qte']; ?></td>
                                    <td class="p-8 text-right font-black text-slate-100"><?php echo number_format($st, 2); ?> DH</td>
                                </tr>
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-12 bg-indigo-600/[0.03] flex flex-col md:flex-row justify-between items-center gap-8 border-t border-white/5">
                    <div>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em] mb-1">Total Général</p>
                        <p class="text-5xl font-black italic text-indigo-500"><?php echo number_format($grandTotal, 2); ?> <span class="text-sm">DH</span></p>
                    </div>
                    <button class="bg-indigo-600 hover:bg-indigo-700 px-12 py-5 rounded-[2rem] font-black text-xs uppercase tracking-widest shadow-xl shadow-indigo-500/20 transition-all">
                        Confirmer l'achat <i class="fas fa-check-circle ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-12 text-center text-slate-700 text-[10px] font-bold uppercase tracking-[0.4em]">
        © 2026 Developed by Fatima Zohra El Bakkali
    </footer>

</body>
</html>