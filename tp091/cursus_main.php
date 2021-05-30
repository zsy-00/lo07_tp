<?php

require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';

echo Charte::html_head_bootstrap('Cursus Main');

echo "<h3>Définition des modules</h3>";
$m1 = new Module('lo07', 'Technologies du web', 'TM', 140);
$m2 = new Module('if26', 'Applications mobiles android', 'TM', 77);
echo $m1;
echo $m2;

echo "<h3>Définition d'un cursus</h3>";
$c = new Cursus();
echo $c->addModule($m1);
echo '<br />';
echo $c->addModule($m2);

echo "<h3>Affichage d'un cursus</h3>";
$c->affiche();

echo Charte::html_foot_bootstrap();
