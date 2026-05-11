<?php
session_start();

// 1. Ila l-user cliqua 3la "Ajouter"
if (isset($_POST['ajouter'])) {
    $id = $_POST['id'];
    
    // Check wach had l-article déjà kâyn f l-panier
    if (isset($_SESSION['panier'][$id])) {
        // Ila kâyn, n-zido ghir f l-quantité
        $_SESSION['panier'][$id]['qte'] += $_POST['qte'];
    } else {
        // Ila ma-kâynch, n-zidoh jdid
        $_SESSION['panier'][$id] = [
            'nom'  => $_POST['nom'],
            'prix' => $_POST['prix'],
            'qte'  => $_POST['qte'],
            'img'  => $_POST['img']
        ];
    }
}

// 2. Ila bghiti t-msah l-panier k-amel (Vider)
if (isset($_GET['action']) && $_GET['action'] == 'vider') {
    unset($_SESSION['panier']);
    header("Location: boutique.php");
    exit();
}
?>