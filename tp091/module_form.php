<?php

require_once 'Charte.class.php';
require_once 'lo07_biblio_formulaire_bt.php';

echo Charte::html_head_bootstrap('Formulaire pour la collecte d\'un Module');

form_begin('module','GET','module_action.php');
form_input_text('Sigle', 'sigle', '', 'LO07');
form_input_text('Label', 'label', '', 'Web');
$categories = ['CS','TM','EC','ME'];
form_select('Catégorie','categorie','', 4, $categories);
form_input_text('Effectif', 'effectif', '', '87');
form_input_reset('effacer');
form_input_submit('envoyer');
form_end();

echo Charte::html_foot_bootstrap();
