<?php
// 1. Grouping: Koul 'item' fih l-code wel PDF dyalo
$workshops = [
    ["title" => "Exercice 1", "atelier" => "1", "code" => "exercice1.php", "pdf" => "Rapport Exercice1.pdf"],
    ["title" => "Exercice 2", "atelier" => "1", "code" => "exercice2.php", "pdf" => "Rapport Exercice2.pdf"],
    ["title" => "TD 1", "atelier" => "1", "code" => "td1_Atelier1.php", "pdf" => "Rapport TD1.pdf"],
    ["title" => "TD 2", "atelier" => "1", "code" => "td2_Atelier1.php", "pdf" => "Rapport TD2.pdf"],
    ["title" => "TD 3", "atelier" => "1", "code" => "td3_Atelier1.php", "pdf" => "Rapport TD3.pdf"],
    ["title" => "TD 4", "atelier" => "1", "code" => "td4_Atelier1.php", "pdf" => "Rapport TD4.pdf"],
    ["title" => "TD 5", "atelier" => "1", "code" => "td5_Atelier1.php", "pdf" => "Rapport TD5.pdf"],
    ["title" => "TD 6", "atelier" => "1", "code" => "td6_Atelier1.php", "pdf" => "Rapport TD6.pdf"],
    ["title" => "TD 7", "atelier" => "1", "code" => "td7_Atelier1.php", "pdf" => "Rapport TD7.pdf"],
    ["title" => "TD 8", "atelier" => "1", "code" => "td8_Atelier1.php", "pdf" => "Rapport TD8.pdf"],
    ["title" => "TD 9", "atelier" => "1", "code" => "td9_Atelier1.php", "pdf" => "Rapport TD9.pdf"],
    ["title" => "TD 10", "atelier" => "1", "code" => "td10_Atelier1.php", "pdf" => "Rapport TD10.pdf"],
    ["title" => "TD 11", "atelier" => "1", "code" => "td11_Atelier1.php", "pdf" => "Rapport TD11.pdf"],
    ["title" => "TD 12", "atelier" => "1", "code" => "td12_Atelier1.php", "pdf" => "Rapport TD12.pdf"],
    ["title" => "TD 13", "atelier" => "1", "code" => "td13_Atelier1.php", "pdf" => "Rapport TD13.pdf"],
    ["title" => "Exercice 3", "atelier" => "2", "code" => "exercice3.php", "pdf" => "Rapport Exercice3.pdf"],
    ["title" => "Exercice 4", "atelier" => "2", "code" => "exercice4.php", "pdf" => "Rapport Exercice4.pdf"],
    ["title" => "Exercice 5", "atelier" => "3", "code" => "exercice5.php", "pdf" => "Rapport Exercice5.pdf"],
    ["title" => "Exercice 6", "atelier" => "3", "code" => "exercice6.php", "pdf" => "Rapport Exercice6.pdf"],
    ["title" => "Exercice 7", "atelier" => "4", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice7.pdf"],
    ["title" => "Exercice 8", "atelier" => "5", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice81.pdf"],
    ["title" => "Exercice 9", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice91.pdf"],
    ["title" => "Exercice 10", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice101.pdf"],
    ["title" => "Exercice 11", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice111.pdf"],
    ["title" => "Exercice 12", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice121.pdf"],
    ["title" => "Exercice 13", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice131.pdf"],
    ["title" => "Exercice 14", "atelier" => "7", "code" => "https://github.com/ayaFrijo/atelier7.git", "pdf" => "Rapport Exercice141.pdf"]


];

$skills = [
    "HTML" => "98%", "CSS" => "75%", "Bootstrap" => "67%",
    "JS" => "45%", "PHP" => "30%", "Python" => "69%"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fatima zohra el baQQali |Digital Portfolio | Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

        body {
            background-color: #020617;
            color: #f8fafc;
            scroll-behavior: smooth;
            font-family: sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hover-card:hover {
            transform: translateY(-10px);
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
        }

        .gradient-bg {
            background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #020617 100%);
        }
    </style>
    


</head>

<body class="gradient-bg">

    <nav class="fixed w-full z-50 p-6">
        <div class="max-w-6xl mx-auto glass rounded-2xl px-8 py-4 flex justify-between items-center">
            <div class="text-2xl font-black tracking-tighter text-indigo-500">DEV.PRO</div>
            <div class="hidden md:flex gap-8 text-sm font-medium">
                <a href="#hero" class="hover:text-indigo-400 transition">Accueil</a>
                <a href="#about" class="hover:text-indigo-400 transition">À Propos</a>
                <a href="#skills" class="hover:text-indigo-400 transition">Skills</a>
                <a href="#projects" class="hover:text-indigo-400 transition">Projets</a>
            </div>
        </div>
    </nav>

    <section id="hero" class="min-h-screen flex flex-col items-center justify-center text-center px-6">
        <span class="px-4 py-1 rounded-full glass text-xs font-bold mb-6 text-indigo-300">DISPONIBLE POUR MISSIONS</span>
        <h1 class="text-6xl md:text-8xl font-extrabold mb-6 tracking-tighter">Design. <span class="text-indigo-500">Code.</span> Deploy.</h1>
        <p class="text-gray-400 text-lg max-w-2xl mb-10 leading-relaxed">Développeur Digital spécialisé dans la création d'interfaces modernes et l'ingénierie des données.</p>
        <div class="flex gap-4">
            <a href="#projects" class="bg-indigo-600 hover:bg-indigo-700 px-8 py-4 rounded-xl font-bold transition">Mes Projets</a>
            <a href="#contact" class="glass px-8 py-4 rounded-xl font-bold transition">Me Contacter</a>
        </div>
    </section>

    <section id="about" class="py-24 px-6 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="h-[400px] bg-indigo-900/20 rounded-3xl border border-indigo-500/20 flex items-center justify-center">
                <span class="text-indigo-500 text-8xl font-black opacity-20">ABOUT</span>
            </div>
            <div>
                <h2 class="text-4xl font-bold mb-6">Expertise en <span class="text-indigo-400">Développement</span></h2>
                <p class="text-gray-400 mb-6 leading-relaxed">Passionné par la technologie, je transforme les idées en produits digitaux performants. Mon approche combine rigueur technique et design épuré pour offrir la meilleure expérience utilisateur possible.</p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-2xl font-bold text-white">02+</h4>
                        <p class="text-gray-500 text-sm">Années d'études</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-white">20+</h4>
                        <p class="text-gray-500 text-sm">Repositories Git</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-24 px-6 bg-black/20">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">Compétences Techniques</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="glass p-6 rounded-2xl text-center">Python / PHP</div>
                <div class="glass p-6 rounded-2xl text-center">JavaScript / HTML</div>
                <div class="glass p-6 rounded-2xl text-center">SQL / Databases</div>
                <div class="glass p-6 rounded-2xl text-center">Tailwind / UI</div>
            </div>
        </div>
    </section>

   <section id="skills">
        <h3 class="section-title" id="skills-title">MY SKILLS</h3>
        <div class="skills-grid">
            <?php foreach($skills as $name => $percentage): ?>
            <div class="skill-item">
                <div class="circle"><?php echo $percentage; ?></div>
                <p><?php echo $name; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="projects-area">
        <h3 class="section-title" id="proj-area-title">MY WORK</h3>
        
        <div class="cat-cards-container">
            <div class="cat-card" onclick="toggleCategory('workshops')">
                <i>📁</i>
                <h3 id="cat-workshops">Workshops</h3>
                <p id="cat-workshops-p">Exercises & Tutorials</p>
            </div>
            <div class="cat-card" onclick="toggleCategory('real-projects')">
                <i>🚀</i>
                <h3 id="cat-real">Projects</h3>
                <p id="cat-real-p">Professional Applications</p>
            </div>
        </div>

        <div id="workshops-list">
            <div class="items-grid">
                <?php foreach($workshops as $w): ?>
                <div class="item-box">
                    <div>
                        <span class="atelier-tag">Atelier <?php echo $w['atelier']; ?></span>
                        <h4><?php echo $w['title']; ?></h4>
                    </div>
                    
                    <div class="btn-group">
                        <a href="<?php echo $w['code']; ?>" class="btn-link btn-code">Source Code</a>
                        <a href="<?php echo $w['pdf']; ?>" class="btn-link btn-pdf">PDF Report</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    <section id="contact" class="py-24 px-6 text-center">
        <div class="max-w-2xl mx-auto glass p-12 rounded-3xl">
            <h2 class="text-3xl font-bold mb-4">Prêt à démarrer ?</h2>
            <p class="text-gray-400 mb-8">Envoyez-moi un message pour discuter de vos projets digitaux.</p>
            <a href="mailto:hello@example.com" class="inline-block bg-white text-black px-10 py-4 rounded-full font-bold hover:scale-105 transition">Contact Direct</a>
        </div>
    </section>

    <footer class="py-12 border-t border-white/5 text-center text-gray-500 text-sm">
        © 2026 Developed with Tailwind CSS & Hosted on Vercel.
    </footer>

</body>

</html>