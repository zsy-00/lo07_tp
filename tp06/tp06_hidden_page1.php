<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   require ('lo07_biblio_formulaire_bt.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tp06_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">tp06_hidden_page1</h3>
                </div>
            </div>
        <?php
        form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
        form_input_hidden("ville","Troyes");
        form_input_hidden("effectif","3000");
        form_input_submit('UTT');
        form_end();
        form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
        form_input_hidden("ville","Compiègne");
        form_input_hidden("effectif", "3200");
        form_input_submit('UTC');
        form_end();
        form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
        form_input_hidden("ville", "Belfort");
        form_input_hidden("effectif", "3100");        
        form_input_submit('UTBM');
        form_end();
        ?>
        </div>    
    </body>
</html>
