<?php

function annaYhteys(){
    $tunnus = "kanikani";
    $salasana= "c9f682ae794e0224";
    static $yhteys=null;

    if ($yhteys === null){
        $yhteys = new PDO("pgsql:host=localhost;port=5432;dbname=$tunnus", $tunnus, $salasana);
        $yhteys ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $yhteys;
}