<?php
class Kayttaja {
  
  private $id;
  private $tunnus;
  private $ssana;
  
  public static function getKayttajat() {
    $sql = "SELECT id,tunnus, ssana from kayttaja";
    $kysely = annaYhteys()->prepare($sql); $kysely->execute();
      
    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $kayttaja = new Kayttaja(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $kayttaja->$kentta = $arvo;
      }
      $tulokset[] = $kayttaja;
    }
    return $tulokset;
  }
  
  public function getTunnus() {
    return $this->tunnus;
  }
  public function getId(){
      return $this->id;
  }
}
