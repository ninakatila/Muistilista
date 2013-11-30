<?php
class Luokitus {
  private $tehtavaid;
  private $luokkaid;

  public function haeTehtavaid() {
      return $this->tehtavaid;
  }
  public function haeLuokkaid(){
      return $this->luokkaid;
  }

  public static function getLuokitukset() {
    $sql = "SELECT tehtavaid, luokkaid from luokitus";
    $kysely = annaKantayhteys()->prepare($sql); $kysely->execute();
      
    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $luokitus = new Luokitus(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $luokitus->$kentta = $arvo;
      }
      $tulokset[] = $luokitus;
    }
    return $tulokset;
  }
}
