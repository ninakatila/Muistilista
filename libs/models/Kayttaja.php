<?php

class Kayttaja {
  private $id;
  private $sukunimi;
  private $etunimi;
  private $puhelin;
  private $mail;
  private $tunnus;
  private $ssana;
  
  public function haeId(){
      return $this->id;
  }
  public function haeSukunimi(){
      return $this->sukunimi;
  }
  public function haeEtunimi(){
      return $this->etunimi;
  }
  public function haePuhelin(){
      return $this->puhelin;
  }
  public function haeMail(){
      return $this->mail;
  }
  public function haeTunnus() {
      return $this->tunnus;
  }
  public function haeSsana(){
      return$this->ssana;
  }
  public function asetaId($id){
      $this->id = $id;
  }
  public function asetaSukunimi($sukunimi){
      $this->sukunimi = $sukunimi;
  }
  public function asetaEtunimi ($etunimi){
      $this->etunimi = $etunimi;
  }
  public function asetaPuhelin($puhelin){
      $this->puhelin = $puhelin;
  }
  public function asetaMail($mail){
      $this->mail = $mail;
  }
  public function asetaTunnus($tunnus){
      $this->tunnus = $tunnus;
  }
  public function asetaSsana($ssana){
      $this->ssana = $ssana;
  }

  public static function getKayttajat() {
    $sql = "SELECT id,sukunimi, etunimi, puhelin, mail, tunnus, ssana from kayttaja";
    $kysely = annaKantayhteys()->prepare($sql); $kysely->execute();
      
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
  
}