<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Fatima Zohra</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #2563eb; --dark: #0f172a; --light: #f8fafc; }
        body { font-family: 'Poppins', sans-serif; background: var(--light); margin: 0; color: #334155; }
        
        header { 
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); 
            color: white; padding: 50px 20px; text-align: center;
            position: relative; overflow: hidden;
        }

        .profile-container { position: relative; display: inline-block; }
        .profile-img { 
            width: 140px; height: 140px; border-radius: 50%; 
            border: 4px solid var(--primary); object-fit: cover;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }

        .container { max-width: 1100px; margin: -30px auto 50px; padding: 0 20px; }
        
        .grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
            gap: 20px; 
        }

        .card { 
            background: white; border-radius: 15px; padding: 20px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
            transition: 0.3s; border: 1px solid #e2e8f0;
            display: flex; flex-direction: column;
        }
        .card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }

        .card-header { display: flex; align-items: center; gap: 10px; margin-bottom: 15px; }
        .icon-box { 
            width: 40px; height: 40px; background: #eff6ff; 
            color: var(--primary); border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
        }

        .card h3 { margin: 0; font-size: 1.1rem; color: var(--dark); }

        .btn-stack { display: flex; flex-direction: column; gap: 8px; margin-top: auto; }
        .btn { 
            text-decoration: none; padding: 8px 12px; border-radius: 8px; 
            font-size: 0.85rem; text-align: center; font-weight: 500;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            transition: 0.2s;
        }

        .btn-php { background: #f1f5f9; color: #475569; }
        .btn-pdf { background: #fef2f2; color: #dc2626; }
        .btn-res { background: var(--primary); color: white; }
        .btn:hover { filter: brightness(0.95); }

        .footer { text-align: center; padding: 40px; color: #94a3b8; font-size: 0.9rem; }
    </style>
</head>
<body>

<header>
    <div class="profile-container">
        <img src="photo-fatima.jpg" alt="Fatima Zohra" class="profile-img">
    </div>
    <h1>Fatima Zohra El Bakkali</h1>
    <p>Développement Digital | Travaux Pratiques PHP & SQL</p>
</header>

<div class="container">
    <div class="grid">
        <?php
        $exercises = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 21, 61, 91, 101, 111, 121, 131, 141];
        
        foreach ($exercises as $i) {
            $php_file = "exercice$i.php";
            $pdf_file = "Rapport Exercice$i.pdf";
            $res_file = "resultat$i.php";

            echo "<div class='card'>";
            echo "<div class='card-header'>
                    <div class='icon-box'><i class='fas fa-folder-open'></i></div>
                    <h3>Exercice $i</h3>
                  </div>";
            echo "<div class='btn-stack'>";
            
            if(file_exists($php_file)) echo "<a href='$php_file' class='btn btn-php'><i class='fas fa-code'></i> Code Source</a>";
            if(file_exists($pdf_file)) echo "<a href='$pdf_file' class='btn btn-pdf'><i class='fas fa-file-pdf'></i> Rapport PDF</a>";
            if(file_exists($res_file)) echo "<a href='$res_file' class='btn btn-res'><i class='fas fa-external-link-alt'></i> Voir Résultat</a>";
            
            echo "</div></div>";
        }
        ?>
    </div>
</div>

<div class="footer">
    &copy; 2026 - Portfolio Académique | Fatima Zohra
</div>

</body>
</html>