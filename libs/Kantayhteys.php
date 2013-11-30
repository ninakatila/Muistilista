<?php

function annaKantayhteys(){
    $tunnus = "kanikani";
    $salasana= "c9f682ae794e0224";
    static $kantayhteys=null;

    if ($kantayhteys === null){
        $kantayhteys= new PDO("pgsql:host=localhost;port=5432;dbname=$tunnus", $tunnus, $salasana);
        $kantayhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    return $kantayhteys;
}