<?php
session_start();

require_once 'Module.class.php';
require_once 'Cursus2.class.php';
require_once 'Charte.class.php';

echo Charte::html_head_bootstrap('Cursus Main');

/** returns a data from superglobal variable $_GET, or a default value
 * @param $index mixed index of the data
 * @return mixed data or default value
 */
function get($index) {
    return isset($_GET[$index]) ? $_GET[$index] : 'NON_DEFINI';
}

// récup des infos du module rentré dans le formulaire
$module = new Module(get('sigle'),get('label'),get('categorie'),get('effectif'));

// ajout au cursus du module récupéré
$c = new Cursus2();
$c->addModule($module);

// création d'autres modules et ajout
$m1 = new Module('lo07', 'Technologies du web', 'TM', 140);
$m2 = new Module('if26', 'Applications mobiles android', 'TM', 77);
echo $c->addModule($m1);
echo '<br />';
echo $c->addModule($m2);

//affichage cursus
echo "<h3>Affichage du cursus ainsi créé avec les deux modules créés manuellement et celui par le formulaire</h3>";
$c->affiche();

echo "
    <div class='panel panel-success'>
        <div class='panel-heading'>
            <h3 class='panel-title'>Réponse Exo 3 question 7</h3>
        </div>
        <div class='panel-body'>
            <h4>Quel sera maintenant le résultat de l’utilisation du script cursus_action2.php?</h4>
            <p>
                Je ne vois pas trop l'intérêt de cette question car le résultat visuel sera le même, la seule différence
                sera qu'un cookie de session est créé et que le cursus sera maintenant stocké dans la question. On peut
                même essayer de le chopper via la variable de session SESSION_cursus pour vérifier :
            </p>
            <pre>
";

print_r($_SESSION['SESSION_cursus']);

echo "
            </pre>
            <p>
                Update je viens de voir que dans la partie validation (exo4) on est censés avoir lo07_analyse_superglobales.php
                et je suppose que c'est pour ça qu'on nous demande le comportement du script. Cependant à aucun moment
                on nous dit de le recopier, l'utiliser ou quoi que ce soit. Encore une incohérence de ce TP, pour y
                pallier j'ai affiché le tableau stocké dans la session juste au dessus.
            </p>
        </div>
    </div>
";

echo Charte::html_foot_bootstrap();
