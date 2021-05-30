<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php setcookie("nom", "zhang");
 setcookie("prénom", "shiyuan");
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
                    <h3 class="panel-title">cookie1</h3>
                </div>
                <div class="panel-body">
                    <h5>E3.3/4: C'est deux requêtes,dans la première requête il crée les cookies, et la deuxième fois la serveur reçoit une nouvelle requête contient les cookies définis par la requête précédente</h5>
                    <h5>E3.8: parce que la fonction setcookie doit être utilisée avant tout contenu HTML</h5>
                </div>
            </div>
        <?php
           echo $_COOKIE["nom"];
           echo("</br>");
           echo $_COOKIE["prénom"];
           
           
        ?>
        </div>
    </body>
</html>
