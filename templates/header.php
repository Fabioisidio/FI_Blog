<?php
require __DIR__ . "/../config/url.php";
require __DIR__ . "/../data/post.php";
require __DIR__ . "/../data/categories.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">
    <!-- GOOGLE FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-- GOOGLE FONTES-->


    <title>Document</title>
</head>
<body>
    <header>
        <a href="<?= $BASE_URL?>" id="logo">
            <img src="<?= $BASE_URL?>/img/FI_Logo.png" alt="Blogs">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL?>" class="nav-link">HOME</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>