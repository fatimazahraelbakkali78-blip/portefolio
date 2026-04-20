<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fatima zohra el baQQali |Digital Portfolio | Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #020617; color: #f8fafc; scroll-behavior: smooth; font-family: sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .hover-card:hover { transform: translateY(-10px); border-color: #6366f1; background: rgba(99, 102, 241, 0.05); }
        .gradient-bg { background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #020617 100%); }
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

    <section id="projects" class="py-24 px-6 max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-12">Portfolio <span class="text-indigo-500">Cards</span></h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6"></div>
                <h3 class="text-xl font-bold mb-2">Atelier 3</h3>
                <p class="text-gray-400 text-sm mb-4">action formulaire et lien hypertext.</p>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-indigo-400">   <a href="/r3.pdf">rapport</a>   </span>
                    <span class="text-indigo-400"><a href="https://github.com/fatimazahraelbakkali78-blip/atelier3.git">lien gitHUB</a></span>
                </div>
            </div>
            <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6"></div>
                <h3 class="text-xl font-bold mb-2">Atelier 4</h3>
                <p class="text-gray-400 text-sm mb-4">fichier text.</p>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-indigo-400">   <a href="#">rapport</a>   </span>
                    <span class="text-indigo-400"><a href="#">lien gitHUB</a></span>
                </div>
            </div>
            <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6"></div>
                <h3 class="text-xl font-bold mb-2">Web App</h3>
                <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-emerald-400">#JS</span>
                    <span class="text-emerald-400">#Vercel</span>
                </div>
            </div>
        </div>
    </section>

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