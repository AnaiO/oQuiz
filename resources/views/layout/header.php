<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="<?php echo route('home')?>/css/reset.css"  rel="stylesheet">

        <!-- Bootstrap css -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo route('home')?>/css/style.css">


        <title>O'Quiz</title>
    </head>
    <body>
        <main class=" col-8 container">

           <!-- Image and text -->
            <nav class="navbar navbar-light bg-light ">
                <a class="navbar-brand" href="<?php route('home')?>">
                    <img src="<?php echo route('home')?>/img/quizz.png" width="80" height="80" class="d-inline-block align-top" alt="">
                    O'Quiz
                </a>
                <a class="nav-link" href="<?php echo route('home')?>">Accueil <span class=""></span></a>
                <a class="nav-link" href="<?php echo route('login')?>">Mon compte <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Déconnexion <span class="sr-only">(current)</span></a>

            
            </nav>