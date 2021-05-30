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
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4>SuperGlobale GET</h4>
            </div>
            
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>valeur(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                        <tr>
                            <td>jourlabel</td>
                            <td><?php foreach ($_GET["jourlabel"] as $value1) {
                            echo $value1;}?></td>
                        </tr>
                        <tr>
                            <td>jourIndice</td>
                            <td><?php foreach ($_GET["jourIndice"] as $value1) {
                            echo $value1;}?></td>
                        </tr>
                        <tr>
                            <td>mois</td>
                            <td><?php foreach ($_GET["mois"] as $value1) {
                            echo $value1;}?></td>
                        </tr>
                        <tr>
                            <td>seance</td>
                            <td><?php  foreach ($_GET["seance"] as $value1) {
                            echo $value1.",";}?></td>
                        </tr>
                                    
                             
                       
                            
                        </tbody>
                    </table>
                </div>
            
        </div>
        </div>                     
    </body>
</html>
