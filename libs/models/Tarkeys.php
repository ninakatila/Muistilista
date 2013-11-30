<?php
class Tarkeys {
  private $id;
  private $arvo;
  private $maarittely;
  private $kayttajaid;

  public function haeId(){
      return $this->id;
  }

  public function haeTarkeys() {
      return $this->arvo;
  }
  public function haeMaarittely(){
      return $this->maarittely;
  }
  public function haeKayttajaid(){
      return $this->kayttajaid;
  }
  public function asetaId($id){
      $this->id = $id;
  }
  public function asetaTarkeys($arvo){
      $this->arvo = $arvo;
  }
  public function asetaMaarittely($maarittely){
      $this->maarittely = $maarittely;
  }
  public function asetaKayttajaid($kayttajaid){
      $this->kayttajaid = $kayttajaid;
  }

  public static function getTarkeydet() {
    $sql = "SELECT id, arvo, maarittely, kayttajaid from tarkeys";
    $kysely = annaKantayhteys()->prepare($sql); $kysely->execute();
      
    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $tarkeys = new Tarkeys(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $tarkeys->$kentta = $arvo;
      }
      $tulokset[] = $tarkeys;
    }
    return $tulokset;
  }
  
}
