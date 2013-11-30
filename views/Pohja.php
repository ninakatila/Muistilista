<?php ?>
<!DOCTYPE html>
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
        <br>
        <ul class="nav nav-tabs">
            <li class="active"><a href="Muistilista.html"><h2>Muistilista</h2></a></li>
            <li><a href="Luokka.html"><h2>Luokka</h2></a></li>
            <li><a href="Tarkeys.html"><h2>Tärkeys</h2></a></li>
        </ul>
        <br>
            <?php require $sivu; ?>
            
        
        <button class="btn btn-default" type="button"><a href="lomakeTehtava.html">
                Lisää uusi</a></button>
        
        <div></div>
    </body>
</html>