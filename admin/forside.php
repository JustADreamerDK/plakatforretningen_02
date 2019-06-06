<?php
session_start();
include "../include/connect.php";
include "../phpcode/crud.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Blog | Admin</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,600" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/tinyicon.png">
</head>
<body class="flex-column center">
    <section class="content flex">
        <?php include "menu.php"; ?>
        <div class="admin-content p-10 m-tb-20">
            <div class="flex-column center">
            <h2>Administration af Plakatforretningen.dks inspirationsblog</h2>
        </div>
        <p class="m-tb-20">
            Herinde kan du se alle indlægs på bloggen. Du kan redigere i dem og du kan slette dem, hvis de ikke længere er aktuelle.
            Du kan desuden se alle kommentarer til indlæggene, ligesom du kan slette i dem, hvis de ikke er passende.
            Sidst, men ikke mindst har du mulighed for at se alle administratorerne, tilføje flere og slette de eksisterende. 
        </p>
        </div>
    </section>
</body>
</html>
