<?php
class Luokka {
  private $id;
  private $luokka;
  private $kuvaus;
  private $kayttajaid;

  public function haeId(){
      return $this->id;
  }
  
  public function haeLuokka() {
    return $this->luokka;
  }
  public function haeKuvaus(){
      return $this->kuvaus;
  }
  public function haeKayttajaid(){
      return $this->kayttajaid;
  }
  public function asetaId($id){
      $this->id = $id;
  }
  public function asetaLuokka($luokka){
      $this->luokka = $luokka;
  }
  public function asetaKuvaus($kuvaus){
      $this->kuvaus = $kuvaus;
  }
  public function asetaKayttajaid($kayttajaid){
      $this->kayttajaid = $kayttajaid;
  }

  public static function getLuokat() {
    $sql = "SELECT id, luokka, kuvaus, kayttajaid from luokka";
    $kysely = annaKantayhteys()->prepare($sql); $kysely->execute();
      
    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $luokka = new Luokka(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $luokka->$kentta = $arvo;
      }
      $tulokset[] = $luokka;
    }
    return $tulokset;
  }
  
}