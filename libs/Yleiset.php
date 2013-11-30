<?php 
class Yleiset{
    private $sivu;

function naytaNakyma($sivu){
     require 'views/Pohja.php';
     $this->sivu = $sivu;
     exit();
 }
}