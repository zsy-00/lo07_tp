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
        <link href="tp06_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">tp06_hidden_page2</h3>
                </div>
            </div>
        <?php
        

         $lien = 'lo07_analyse_superglobales.php?';
            foreach ($_GET as $key => $value) {
            $lien .= $key . '=' . $value . '&';
        }  ?>
        <a href="<?php echo $lien?> "><?php echo $lien?></a> 
 
      
        </div>
    </body>
</html>
