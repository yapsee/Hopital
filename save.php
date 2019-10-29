<?php

    if($_POST['nom'] && $_POST['prenom'] && $_POST['medecin'] && $_POST['genre'] && $_POST['date'])
    {   
        require "html/m/Patient.php";
        require "html/m/Secretaire.php";
        $patient = new Patient($_POST['nom'], $_POST['prenom'], $_POST['medecin'], $_POST['genre'],
        $_POST['tel'],$_POST['email'],$_POST['addresse'], $_POST['age'] );
        $secretaire = new MSecretaire;
        $secretaire->prendreRv($patient, $_POST['date']);
    }
    
header('location:index.php?page=rv');