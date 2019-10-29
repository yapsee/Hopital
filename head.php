<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERFACE HOPITAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="html/v/css/apt.css">
    <link rel="stylesheet" type="text/css" href="html/v/css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="html/v/css/style.css">
    <link rel="stylesheet" href="html/v/css/list.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/jquery-ui-git.css">
</head>

<body>
    <?php
    if (session_status() === PHP_SESSION_ACTIVE && $_SESSION[$con] === TRUE) {
        require 'header.php';
    }

    ?>
    <div id="particles-js"></div>
</body>