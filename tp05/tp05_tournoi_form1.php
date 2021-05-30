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
        <title>formulaire1</title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulaire 1</h3>
                </div>
            </div>
        
        <?php
        form_begin("lo07", "get", "tp05_tournoi_form2.php");
        form_select("Le nombre de joueurs de l'équipe","formulaire","", 4,listform1());
        form_input_reset("effacer");
        form_input_submit("envoyer");
        form_end();
        ?>
        
        </div>
    </body>
</html>
