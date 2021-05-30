<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('bibliotheque.php');
require ('lo07_biblio_formulaire_bt.php');
?>

<?php include 'fragmentHeader.html';?>
<body>
    <div class="container">
       
        <?php
        include 'fragmentMenu.html';
        include 'fragmentJumbotron.html';
        
        include 'fragmentDatabaseConfig.php';
        
        try{
        $database = new PDO($dsn, $username, $password);
        panel_head("Formulaire de sélection une année");
        $query1="select distinct annee form vin order by annee";
        $statement1 = $database->query($query1);
        
        
        }
       
        catch (PDOException $e) {
        printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
        }
        
        form_select("annee", "annee", "multiple", "", $form);
        form_input_submit("Submit form");
        include 'fragmentFooter.html'; 
        ?>
