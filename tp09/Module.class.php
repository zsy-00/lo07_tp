<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
              require_once 'Charte.class.php';
              class Module{
                  private $sigle;
                  private $label;
                  private $categorie;
                  private $effectif;                  
                  private $listeErreurs=array();
                  
                  function setSigle($sigle): void {
                      $this->sigle = $sigle;
                  }
                  function getSigle() {
                      return $this->sigle;
                  }
                  function setLabel($label): void {
                      $this->label = $label;
                  }
                  function getLabel() {
                      return $this->label;
                  }
                  function setCategorie($categorie): void {
                      $this->categorie = $categorie;
                  }
                  function getCategorie() {
                      return $this->categorie;
                  }
                  function setEffectif($effectif): void {
                      $this->effectif = $effectif;
                  }
                  function getEffectif() {
                      return $this->effectif;
                  }
                  
                  function _construct($sigle,$label,$categorie,$effectif){
                      $this->setSigle($sigle);
                      $this->setLabel($label);
                      $this->setCategorie($categorie);
                      $this->setEffectif($effectif);
                  }
                  function _tostring() {
                      return "Module ($this->sigle,$this->label,$this->categorie,$this->effectif)<br />\n";
                  }
                  public function valide(){
                      $resultat=TRUE;
                      $sigle= filter_input(INPUT_GET,"sigle",FILTER_SANITIZE_STRING);
                      
                      if (strlen($sigle)==0){
                          $resultat==FALSE;
                          $this->listeErreurs["sigle"]="sigle n'est pas défini.";
                      }
                      return $resultat;
                  }
                  
                  public function pageKO() {
                      echo Charte::html_head_bootstrap("Les WebBean Modules");
                      echo ("<h2>votre formulaire n'est pas correct</h2>");
                      foreach ($this->listeErreurs as $key => $value) {
                          echo ("$key=>$value<br />\n");
                      }
                      echo Charte::html_foot_bootstrap();
                  }
                  public function pageOK(){
                      echo Charte::html_head_bootstrap("Les WebBean Modules");
                      echo ("<h2>votre formulaire est correct</h2>");
                      foreach ($_GET as $key => $value) {
                          echo ("$key=>$value<br />\n");
                      }
                     }
                  public function pageFoot() {
                      echo Charte::html_foot_bootstrap();
                     }
                  public function sauveTXT() {
                      echo("<h3>SauveTXT</h3>");
                      $resultat = $this->sigle.";";
                      $resultat .= $this->label.";";
                      $resultat .= $this->categorie.";";
                      $resultat .= $this->effectif.";";
                      return $resultat;
                  }
                  public function sauveXML() {
                      return "xml";
                  }
                  public function sauveBDR($table) {
                      echo("<h3>SauveBDR</h3>");
                      $resultat ="insert into".$table."values(";
                      $resultat.="'".$this->sigle."',";
                      $resultat.="'".$this->label."',";
                      $resultat.="'".$this->categorie."',";
                      $resultat.="'".$this->effectif."',)";
                      return $resultat;
                  }


              }
        ?>
    </body>
</html>
