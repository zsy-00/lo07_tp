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
    </head>
    <body>
        <?php
        require_once 'Charte.class.php';
        require_once 'Module.class.php';
        
        $module= new Module();
        $module->setSigle($_GET["sigle"]);
        $module->setLabel($_GET["label"]);
        $module->setCategorie($_GET["categorie"]);
        $module->setEffectif($_GET["effectif"]);
        
        if ($module->valide()){
            $module->pageOK();
            echo ($module->sauveTXT()."<br />\n");
            echo ($module->sauveBDR("module")."<br />\n");
            $module->pageFoot();
        }
        else {
            $module->pageKO();
        }
        ?>
    </body>
</html>
