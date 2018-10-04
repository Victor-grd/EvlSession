<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Validation</title>
</head>
<body>
<header>
    <?php
        // Systeme de connection
        session_start();
        if(empty($_POST['firstname']) || empty($_POST['lastname'])){
            echo "non connecter";
            echo '<p><a href="#connexion">connexion</a></p>';
        }else{
            $_SESSION['lastname']=$_POST['lastname'];
            $_SESSION['firstname']=$_POST['firstname'];
            echo "Bonjour,".$_SESSION['firstname']." ".$_SESSION['lastname']."!";
            echo '<p><a href="#selectSection">Edit sections</a></p>';
            echo '<p><a href="#sections">Page Sections</a></p>';
        };
    ?>
</header>
