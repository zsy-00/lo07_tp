<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('lo07_biblio_formulaire_bt.php');
$titre="formulaire module";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $titre; ?></h3>
        </div>
      </div> 
        <?php
        form_begin("lo07", "get", "module_action.php");
        form_input_text("Sigle", "sigle", "", "LO07");
        form_input_text("Label", "lable", "", "Web");
        form_select("Catégorie", "categorie", "",4, cate());
        form_input_text("Effectif", "effectif", "", "87");
        form_input_reset("effacer");
        form_input_submit("envoyer");
        form_end();

        
        function cate(){
            return array(
                "CS"=>"CS",
                "TM"=>"TM",
                "EC"=>"EC",
                "ME"=>"ME",
             );
        }        
        ?>
    </body>
</html>
