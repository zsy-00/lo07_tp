<?php

require_once 'WebBean.interface.php';
require_once 'Charte.class.php';

/**
 * Class Module
 */
class Module implements WebBean
{

    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    private $listeErreurs = array();

    /**
     * Module constructor.
     * @param $sigle
     * @param $label
     * @param $categorie
     * @param $effectif
     */
    public function __construct($sigle, $label, $categorie, $effectif)
    {
        $this
            ->setSigle($sigle)
            ->setLabel($label)
            ->setCategorie($categorie)
            ->setEffectif($effectif)
        ;
    }

    /**
     * @return mixed
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    // J'ai fait des fluent setters parce que c'est 100 fois plus pratique
    /**
     * @param mixed $sigle
     * @return Module
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     * @return Module
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     * @return Module
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param mixed $effectif
     * @return Module
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
        return $this;
    }

    public function __toString()
    {
        return "Module ($this->sigle, $this->label, $this->categorie, $this->effectif)";
    }

    /**
     * @return bool
     */
    public function valide()
    {
        $res = TRUE;
        $tableItems = ['sigle','label','categorie','effectif'];
        foreach ($tableItems as $value){
            $nom = filter_input(INPUT_GET, $value, FILTER_SANITIZE_STRING);
            if(strlen($nom) == 0){
                $res = FALSE;
                $this->listeErreurs[$value] = "$value n'est pas défini";
            }
        }
        return $res;
    }

    public function pageKO()
    {
        echo Charte::html_head_bootstrap('Les WebBean Modules');
        echo "<h2>Votre formulaire n'est pas correct</h2>";
        foreach($this->listeErreurs as $key => $value)
            echo "$key => $value <br />\n";
        echo Charte::html_foot_bootstrap();
    }

    public function pageOK()
    {
        echo Charte::html_head_bootstrap('Les WebBean Modules');
        echo "<h2>Votre formulaire est correct</h2>";
        foreach($_GET as $key => $value)
            echo "$key => $value <br />\n";
    }

    /**
     * @return string
     */
    public function sauveTXT()
    {
        return "
            <h3>SauveTXT</h3><br />
            $this->sigle;$this->label;$this->categorie;$this->effectif;
        ";
    }

    /** Guette l'inutilité d'un telle fonction ! Je veux bien retourner du xml mais il faudrait en savoir un peu plus,
     *  et même quand on doit juste recopier on recopie qq chose qui n'a aucun sens
     * @param $file
     * @return string
     */
    public function sauveXML($file)
    {
        return "xml";
    }

    /** Sauvegarde d'un Module en BD
     * @param $table
     * @return string
     */
    public function sauveBDR($table)
    {
        $res = "<h3>SauveBDR</h3><br />";
        return  $res . "INSERT INTO $table VALUES ('$this->sigle','$this->label','$this->categorie','$this->effectif');";
    }

    /** Création de la requête de création de table pour le stockage de modules
     * @param $table string Le nom de la table à créer
     * @return string Retourne
     */
    public function createTable($table)
    {
        $res = "<h3>createTable</h3><br />";
        return $res . "
            CREATE TABLE $table (
                sigle varchar(6) not null,
                label varchar(40) not null,
                categorie varchar(2) check categorie in ('CS','TM','EC','ME','CT'),
                effectif integer,
                primary key (sigle)
            );
        ";
    }

    public function pageFoot()
    {
        echo Charte::html_foot_bootstrap();
    }
}