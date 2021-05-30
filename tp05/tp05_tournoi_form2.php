<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('lo07_biblio_formulaire_bt.php');
require ('lo07_biblio_planning.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>formulaire2</title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
         <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulaire 2</h3>
                </div>
            </div>
        <?php
        foreach ($_GET["formulaire"] as $value1) {
           $z= $value1+1;}
        form_begin("lo07", "get", "tp05_tournoi_action.php");
        for($i=1;$i<$z;$i++){
        
            form_input_text("Nom_$i","nom_$i","","");
            form_input_text("Prenom_$i","prenom_$i","","");
            form_input_text("Email_$i","email_$i","","");
           
        
        
        }
        form_input_reset("effacer");
        form_input_submit("envoyer");
        form_end();     
        ?>
    </body>
</html>
