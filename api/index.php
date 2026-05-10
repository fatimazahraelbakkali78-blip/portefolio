<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatima Zohra | Digital Portfolio Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #020617;
            color: #f8fafc;
            scroll-behavior: smooth;
            font-family: 'Inter', sans-serif;
        }

        .card-section {
            padding: 5rem 1.5rem;
            max-width: 72rem;
            margin: 0 auto;
        }

        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hover-card:hover {
            transform: translateY(-5px);
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
        }

        .gradient-bg {
            background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #020617 100%);
        }
    </style>
</head>

<body class="gradient-bg">
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


        <nav class="fixed w-full z-50 p-6">
            <div class="max-w-6xl mx-auto glass rounded-2xl px-8 py-4 flex justify-between items-center">
                <div class="text-2xl font-black tracking-tighter text-indigo-500">DEV.PRO</div>
                <div class="hidden md:flex gap-8 text-sm font-medium">
                    <a href="#hero" class="hover:text-indigo-400 transition">Accueil</a>
                    <a href="#projects" class="hover:text-indigo-400 transition">Ateliers</a>
                    <a href="#contact" class="hover:text-indigo-400 transition">Contact</a>
                </div>
            </div>
        </nav>

        <div id="hero" class="card-section flex flex-col items-center text-center pt-32">
            <span class="px-4 py-1 rounded-full glass text-xs font-bold mb-6 text-indigo-300">DISPONIBLE POUR MISSIONS</span>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tighter"> Fatima Zohra El Bakkali <br> Design. <span class="text-indigo-500">Code.</span> Deploy.</h1>
            <p class="text-gray-400 text-lg max-w-2xl mb-10 leading-relaxed">Développeur Digital spécialisée dans le Cloud & Data Engineering.</p>
            <div class="flex gap-4">
                <a href="#projects" class="bg-indigo-600 hover:bg-indigo-700 px-8 py-4 rounded-xl font-bold transition">Voir les Ateliers</a>
                <img src="photo-fatima.jpeg" alt="Profile" class="w-12 h-12 rounded-full border-2 border-indigo-500 object-cover">
            </div>
        </div>

        <div id="projects" class="card-section">
            <h2 class="text-4xl font-bold mb-12 border-l-4 border-indigo-500 pl-4">Mes <span class="text-indigo-500">Réalisations</span></h2>

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
                                <?php for ($i = 1; $i <= 13; $i++): ?>
                                    <div class="flex justify-between items-center bg-indigo-500/5 p-2 rounded-lg">
                                        <span class="text-[10px]">TD <?= $i ?></span>
                                        <div class="flex gap-2">
                                            <a href="td<?= $i ?>_Atelier1.php" class="text-indigo-500"><i class="fas fa-link"></i></a>
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
                        foreach ($ateliers as $num => $label): ?>
                            <div class="flex justify-between items-center bg-white/5 p-3 rounded-xl">
                                <span class="font-bold text-sm"><?= $label ?></span>
                                <div class="flex gap-4">
                                    <a href="exercice<?= $num ?>.php" class="text-indigo-400 text-xs font-bold uppercase hover:underline">Code</a>
                                    <a href="Rapport Exercice<?= $num ?>.pdf" class="text-red-400 text-xs font-bold uppercase hover:underline">PDF</a>
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
                        foreach ($advanced as $ex): ?>
                            <div class="flex justify-between items-center bg-emerald-500/5 p-2 rounded-lg border border-emerald-500/10">
                                <span class="text-xs font-bold">Exercice <?= $ex ?></span>
                                <a href="exercice<?= $ex ?>.php" class="text-emerald-400 hover:text-white transition"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
        <hr>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass p-4 rounded-3xl hover-card transition-all duration-300" style="border-color: #6366f1;">
                <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6">
                    <img src="/6084414.jpg" alt="Atelier 3" style="height:200px">
                </div>
                <h3 class="text-xl font-bold mb-2">mon_projet </h3>
                <p class="text-gray-400 text-sm mb-4">fichier text.</p>
                
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-indigo-400"> <a href="/mon_projet.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="C:\Users\Hp\Desktop\atelier-php\api\mon_projet.php">code</a></span>
                </div>
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

</body>

</html>