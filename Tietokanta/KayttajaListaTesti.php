<?php
require_once "Yhteys.php"; 
require_once "Kayttaja.php";

//Lista asioista array-tietotyyppiin laitettuna:
$tulokset = Kayttaja::getKayttajat();
?><!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
        <ul>
            <?php foreach ($tulokset as $tulos): ?>
                <li><?php echo $tulos->getTunnus(); ?></li>
                <li><?php echo $tulos->getId(); ?></li>
            <?php endforeach; ?>
        </ul>
        
    <div></div>
    </body>
</html>
