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
        panel_head("Ajout d'un vin (form)");
        form_begin("lo07", "get", "page_vin_ajoute_action.php");
        form_input_text("cru", "cru", "", "");
        form_input_text("annee", "annee", "", "");
        form_input_text("degre", "degre", "", "");
        form_input_submit("Submit form");
        include 'fragmentFooter.html'; 
        ?>
