<?php
$con = 'connexion';
$poste = 'poste';
$id = 'id';
error_reporting(6143);
if (session_status() !== PHP_SESSION_ACTIVE || session_status() === PHP_SESSION_NONE) {

    session_start();
    $_SESSION[$con];
    $_SESSION[$poste];
    $_SESSION[$id];
}
require 'html/v/head.php';

if ($_SESSION[$con] === TRUE) {
    if (htmlentities($_GET['page'])) {
        switch (htmlentities($_GET['page'])) {
            case 'rv':
                include 'html/v/appointment-form.php';
                break;
            case 'plan':
                include 'html/v/plan.php';
                break;
            case 'dec':
                require_once 'html/c/Connexion.php';
                CConnexion::desauthentification();
                header('location:index.php');
                break;
            default:
                echo "<h1>oups<h1>";
        }
    }
} else {
    $usern = 'username';
    $userp = 'password';
    require 'html/c/Connexion.php';
    require 'html/v/login.php';
    if ($_POST[$usern] && $_POST[$userp]) {
        $connect = new CConnexion($_POST[$usern], $_POST[$userp]);
        $connect->authentification();
        header('location:');
    }
}

require 'html/v/footer.php';