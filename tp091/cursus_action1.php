<?php

require_once 'Module.class.php';
require_once 'Cursus.class.php';
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
$c = new Cursus();
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
            <h3 class='panel-title'>Réponse Exo 3 question 4</h3>
        </div>
        <div class='panel-body'>
            <h4>Quel sera le résultat de l’utilisation du script cursus_action2.php?</h4>
            <p>
                Et bien tout simplement l'affichage des ajouts et l'affichage du cursus via la méthode afficher().
                Après tout va dépendre de ce qui est passé via le formulaire. Après j'ai sécurisé le tout pour que
                si un élément n'a pas d'élément GET défini ce soit protégé : si rien il affiche NON_DEFINI et si vide
                il affiche une string vide (pour les caractéristiques du module)
            </p>
        </div>
    </div>
";

echo Charte::html_foot_bootstrap();
