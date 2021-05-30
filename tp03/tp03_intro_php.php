<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp03_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            
            <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" herf="#">Web 03</a>
        </div>
    
        <ul class="nav navbar-nav">
            <li class="active"> <a href="#1">Exercice 1</a></li>
            <li class="active"> <a href="#2">Exercice 2</a></li>
            <li class="active"> <a href="#3">Exercice 3</a></li>
            <li class="active"> <a href="#4">Exercice 4</a></li>
            <li class="active"> <a href="#five">Exercice 5</a></li>
        </ul>
        </nav>   
            
        <div class="panel panel-success" id="1">
            <div class="panel-heading">
            <h3 class="panel-title">Exercice1: validation de la configuration div-si </h3>
            </div>
            <div class="panel-body">
                <?php
                echo "Bonjour à tous";
                ?>
            </div>
        </div>
            <?php
            $nom="Durand";
            $prenom="Pascal";
            $age="32";
            $ingenieur="1";
            ?>
                    
            
        <div class="panel panel-primary" id="2">
            <div class="panel-heading">
                <h3>Exercice2</h3>
            </div>    
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">Nom=<?php echo $nom ;?> </li>
                    <li class="list-group-item">Prénom=<?php echo $prenom ;?></li>
                    <li class="list-group-item">Age=<?php echo $age ;?></li>
                    <li class="list-group-item">Ingénieur=<?php echo $ingenieur ;?></li>
                </ul>
            </div>
        </div>
            
           
        <div class="panel panel-success" id="3">
            <div class="panel-heading">
                <h3>Exercice3: tableau des capitales d'afrique</h3>
            </div>
            <div class="panel-body">
                <h2 class="text-primary"> print_r </h2>
                <?php   $tableau = array ("Alger","Bamako","Conakry","Cotonou","5","Freetown","Kampla","Lomé","Nairobi","Yamoussoukro"); 
                        $tableau[10]="Maputo";
                        unset($tableau[4]); 
                        echo '<pre>';
                        print_r($tableau);
                       
                ?>
            </div>
            
            <div class="panel panel-body">
            <?php $table= array ("Alger","Bamako","Conakry","Cotonou","Freetown","Kampla","Lomé","Nairobi","Yamoussoukro","Maputo"); ?>
            <h3 class="text-primary">foreach</h3>
            <ul class="list-group">
            <?php foreach($table as $value) { ?>
                  <li class="list-group-item"><?php echo $value; ?></li>
            <?php } ?>
            </ul>     
            </div>
            
            <div class="panel-body">
            <h3 class="text-primary">Implode</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning" > <?php echo implode(",",$table)."<br>"; ?></li>
            </ul>
            </div>
            <div class="panel-body">
            <h3 class="text-primary">Accès aux données</h3>
            <ul class="list-group">
                <li class="list-group-item">Nimbre d'élements=10</li>
                <li class="list-group-item list-group-item-danger" >Tableau tiré= <?php sort($table); echo implode(",",$table);?></li>
            </ul> 
            </div>
            </div>
            
        <div class="panel panel-info" id="4">
            <div class="panel-heading">
                <h3>Exercise4: Tableau associatifs</h3>
            </div>
                <div class="panel-body">
                    <?php $capital=array (
                        "France"=>"Paris",
                        "Italie"=>"Rome",
                        "Belgique"=>"Bruxelles",
                        "Espagne"=>"Madrid",
                        "Allemagne"=>"Berlin",
                        "Portugal"=>"Lisbonne",
                        "France"=>"Troyes");
                        
                     ?>
                    <h5> <?php echo $capital["Allemagne"] ;?></h5>
                    <ul class="list-group">
                        <?php foreach ($capital as $key => $value)  {?>
                        <li class="list-group-item"><?php echo $key,"=>",$value; ?> </li>
                        <?php    }?>
                        
                    </ul>
                    
                    
                    <?php $capital1=array (
                        "France"=>"Paris",
                        "Italie"=>"Rome",
                        "Belgique"=>"Bruxelles",
                        "Espagne"=>"Madrid",
                        "Allemagne"=>"Berlin",
                        "Portugal"=>"Lisbonne",
                        );                     
                     ?>                    
                    <ul class="list-group">
                        <?php foreach ($capital1 as $key => $value)  {?>
                        <li class="list-group-item"><?php echo $key,"=>",$value; ?> </li>
                        <?php    }?>                       
                    </ul>
                    
                     
                    <ul class="list-group">
                        <?php foreach ($capital1 as $key => $value)  {?>
                        <li class="list-group-item"><?php echo "cls=".$key.",valeur=".$value; ?> </li>
                        <?php    }?>                       
                    </ul>
                </div>
            </div>
            
           
            <div class="panel panel-success"id="five">
                <div class="panel-heading" >
                    <h3 >Exercice5: fonction</h3>
                </div>
                <div class="panel-body">
                <?php function badge_danger($label, $compteur){
                      return ("<button class='btn btn-danger'>$label<span class='badge text-success'>$compteur</span></button>");}
                      echo badge_danger("web", 6);
                ?>     
                    
                <?php foreach($table as $label){
                       $compteur= strlen($label);
                       echo ("<button class='btn btn-danger'>$label<span class='badge text-success'>$compteur</span></button>");
                }?>
                
            </div>
                
              
        </div>
        </div>
            
            
    </body>
    </html>
