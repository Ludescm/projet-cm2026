<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $error = [];

     $email = trim($_POST['email'] ?? '');
    if (empty($email)) {
        $error['email'] = 'L\'adresse email est obligatoire.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'Le format de l\'adresse email n\'est pas valide.';
    }
      $password = trim($_POST['password'] ?? '');
    if (empty($password)) {
        $error['password'] = 'Le mot de passe est obligatoire.';
    }

    if(!$error){
        // Etablir une connexion a la DB
        // Recuperer dans la DB l'enregistrement du user concerné (mdp_hach & role)
        // Si l'utilisateur existe alors :
        // - Verifier que le mdp donné correspond au mdp hashé
        // - Verifier que le user a la bon role
        // Si les 2 sont ok
        // Sécurisé la connexion
    }
}



include __DIR__ . "/../Views/admin/DashboardLayouts/HeaderDashboard.php";
include __DIR__ . "/../Views/admin/connexionAdmin.php";
include __DIR__ . "/../Views/admin/DashboardLayouts/FooterDashboard.php";
