<?php

/**
 * Class Cursus
 */
class Cursus
{

    private $listeModules;

    /**
     * Cursus constructor.
     */
    public function __construct()
    {
        $this->listeModules = array();
    }

    /**
     * @param $module
     * @return string
     */
    public function addModule($module)
    {
        $this->listeModules[$module->getSigle()] = $module;
        return "addmodule : $module";
    }

    /** Affichage un peu moche mais au moins il y a toutes les infos dans une string
     * @return string
     */
    public function __toString()
    {
        return "
            <pre>
                ".print_r($this->listeModules)."
            </pre>
        ";
    }

    /**
     * Affiche le tableau avec print_r
     */
    public function affiche()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

}