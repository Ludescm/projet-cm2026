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

    $password_hash = password_hash('toto', PASSWORD_DEFAULT);

    var_dump($email);
    var_dump($password);
    var_dump($password_hash);
    die;
}



include __DIR__ . "/../Views/admin/DashboardLayouts/HeaderDashboard.php";
include __DIR__ . "/../Views/admin/connexionAdmin.php";
include __DIR__ . "/../Views/admin/DashboardLayouts/FooterDashboard.php";
