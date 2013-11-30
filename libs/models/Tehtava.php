<?php
class Tehtava {
  private $id;
  private $tehtava;
  private $tehtavakuvaus;
  private $luokka;
  private $tarkeys;
  private $kayttajaid;

  public function haeId() {
    return $this->id;
  }
  public function haeTehtava() {
    return $this->tehtava;
  }
  public function haeTehtavakuvaus() {
    return $this->tehtavakuvaus;
  }
  public function haeLuokka() {
    return $this->luokka;
  }
  public function haeTarkeys() {
    return $this->tarkeys;
  }
  public function haeKayttajaid() {
    return $this->kayttajaid;
  }
  public function asetaId($id){
      $this->id = $id;      
  }
  public function asetaTehtava($tehtava){
      $this->tehtava = $tehtava;      
  }
  public function asetaTehtavakuvaus($tehtavakuvaus){
      $this->tehtavakuvaus = $tehtavakuvaus;      
  }
  public function asetaLuokka ($luokka){
      $this->luokka = $luokka;
  }
  public function asetaTarkeys ($tarkeys){
      $this->tarkeys = $tarkeys;
  }
  public function asetaKayttajaid ($kayttajaid){
      $this->kayttajaid = $kayttajaid;
  }

  public static function haeTehtavat() {
    $sql = "SELECT id, tehtava, tehtavakuvaus, luokka, tarkeys, kayttajaid from tehtava";
    $kysely = annaKantayhteys()->prepare($sql); $kysely->execute();
      
    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $tehtava = new Tehtava(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $tehtava->$kentta = $arvo;
      }
      $tulokset[] = $tehtava;
    }
    return $tulokset;
  }
  
}
