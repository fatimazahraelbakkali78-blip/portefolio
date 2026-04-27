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

        .card {
            padding: 5rem 1.5rem;
            max-width: 72rem;
            /* max-w-6xl */
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            min-height: fit-content;
            /* Bach l'div t'atalla m3a l'content */
             border-color: #6366f1;
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

    <div id="hero" class="card">
        <span class="px-4 py-1 rounded-full glass text-xs font-bold mb-6 text-indigo-300">DISPONIBLE POUR MISSIONS</span>
        <h1 class="text-6xl md:text-8xl font-extrabold mb-6 tracking-tighter">Design. <span class="text-indigo-500">Code.</span> Deploy.</h1>
        <p class="text-gray-400 text-lg max-w-2xl mb-10 leading-relaxed">Développeur Digital spécialisé dans la création d'interfaces modernes et l'ingénierie des données.</p>
        <div class="flex gap-4">
            <a href="#projects" class="bg-indigo-600 hover:bg-indigo-700 px-8 py-4 rounded-xl font-bold transition">Mes Projets</a>
            <a href="#contact" class="glass px-8 py-4 rounded-xl font-bold transition">Me Contacter</a>
        </div>
    </div>

    <div id="about" class="card">
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
    </div>

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

    <div id="projects" class="glass p-6 rounded-3xl hover-card transition-all duration-300 h-full flex flex-col justify-between">
        <h2 class="text-4xl font-bold mb-12">Portfolio <span class="text-indigo-500">Cards</span></h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6">
                    <img src="/6084414.jpg" alt="Atelier 3" style="height:200px">
                </div>
                <h3 class="text-xl font-bold mb-2">Atelier 1</h3>
                <p class="text-gray-400 text-sm mb-4">fichier text.</p>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-indigo-400"> <a href="/Rapport Exercice1.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/exercice1.php">code</a></span>
                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <span class="text-indigo-400"> <a href="/Rapport Exercice2.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/exercice2.php">code</a></span>
                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 1</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD1.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td1_Atelier1.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 2</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD2.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td2_Atelier2.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 3</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD3.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td3_Atelier3.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 4</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD4.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td4_Atelier4.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 5</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD5.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td5_Atelier5.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 6</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD6.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td6_Atelier6.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 7</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD7.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td7_Atelier7.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 8</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD8.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td8_Atelier8.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 9</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD9.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td9_Atelier9.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 10</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD10.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td10_Atelier10.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 11</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD11.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td11_Atelier11.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 12</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD12.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td12_Atelier12.php">code</a></span>

                </div>
                <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                    <h1>TD 13</h1>
                    <span class="text-indigo-400"> <a href="/Rapport TD13.pdf">rapport</a> </span>
                    <span class="text-indigo-400"><a href="/td13_Atelier13.php">code</a></span>

                </div>
            </div>
        </div>

 <div class="grid md:grid-cols-3 gap-8">  <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6">
                <img src="/6084414.jpg" alt="Atelier 3" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">Atelier 2</h3>
            <p class="text-gray-400 text-sm mb-4">fichier text.</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 3 </h1>

                <span class="text-indigo-400"> <a href="/Rapport Exercice3.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice3.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 4 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice4.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice4.php">code</a></span>
            </div>
        </div>


        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-blue-600 to-indigo-800 rounded-2xl mb-6">
                <img src="/6084414.jpg" alt="Atelier 3" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">Atelier 3</h3>
            <p class="text-gray-400 text-sm mb-4">action formulaire et lien hypertext.</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 5 </h1>

                <span class="text-indigo-400"> <a href="/Rapport Exercice5.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice5.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 6 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice6.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice6.php">code</a></span>
            </div>
        </div>

        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6">
                <img src="/cover.png" alt="Atelier 5" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">atelier 4</h3>
            <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 7 </h1>

                <span class="text-indigo-400"> <a href="/Rapport Exercice7.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice7.php">code</a></span>
            </div>

        </div>
        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6">
                <img src="/cover.png" alt="Atelier 5" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">atelier 5</h3>
            <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 8 </h1>

                <span class="text-indigo-400"> <a href="/Rapport Exercice81.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice8.php">code</a></span>
            </div>

        </div>
        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6">
                <img src="/cover.png" alt="Atelier 5" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">atelier 6</h3>
            <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 9</h1>

                <span class="text-indigo-400"> <a href="/Rapport Exercice91.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice9.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 9 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice91.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice9.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 10 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice101.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice10.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 11 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice111.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice11.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 12 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice121.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice12.php">code</a></span>
            </div>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 13 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice131.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice13.php">code</a></span>
            </div>
        </div>
        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6">
                <img src="/cover.png" alt="Atelier 5" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">atelier 7</h3>
            <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <h1>Exercice 14 </h1>
                <span class="text-indigo-400"> <a href="/Rapport Exercice14.pdf">rapport</a> </span>
                <span class="text-indigo-400"><a href="/exercice14.php">code</a></span>
            </div>
        </div>
        <div class="glass p-4 rounded-3xl hover-card transition-all duration-300">
            <div class="h-48 bg-gradient-to-tr from-emerald-600 to-teal-800 rounded-2xl mb-6">
                <img src="/cover.png" alt="Atelier 5" style="height:200px">
            </div>
            <h3 class="text-xl font-bold mb-2">atelier 8</h3>
            <p class="text-gray-400 text-sm mb-4">Application web optimisée pour la gestion dynamique des contenus...</p>
            <div class="flex gap-2 text-[10px] uppercase font-bold tracking-widest">
                <span class="text-emerald-400">#JS</span>
                <span class="text-emerald-400">#Vercel</span>
            </div>

        </div>


    </div>
    </div>
    </div></div>

       

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