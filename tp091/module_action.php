<?php
require_once 'Module.class.php';

/** returns a data from superglobal variable $_GET, or a default value
 * @param $index mixed index of the data
 * @return mixed data or default value
 */
function get($index) {
    return isset($_GET[$index]) ? $_GET[$index] : 'NON_DEFINI';
}

$module = new Module(get('sigle'),get('label'),get('categorie'),get('effectif'));

if($module->valide()){
    $module->pageOK();
    echo $module->sauveTXT() . '<br>';
    echo $module->createTable('modules') . '<br>';
    echo $module->sauveBDR("Modules") . '<br>';
    $module->pageFoot();
}
else
    $module->pageKO();