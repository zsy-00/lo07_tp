<?php

/**
 * bootstrap 3 form functions library
 * date : 02/04/2021
 * @author : Valentin LOUERAT
 * based on Marc LEMERCIER's work for LO07 UTT course
 */

/** Initiates a bootstrap form
 * @param $class string form's class parameters
 * @param $method string POST/GET
 * @param $action string script to launch
 */
function form_begin($class, $method, $action) {
    echo "
        <!-- form_begin : $class $method $action) --> \n
        <form class='$class' method='$method' action='$action'> \n
    ";
}
// note perso : les '' affichent full texte, les "" affichent les variables, \n et quelques autres escaped characters

/** Creates a text bootstrap input (text, password, email)
 * @param $label string input's html label
 * @param $name string input's html name
 * @param $size int|string input's size
 * @param $value string input's html value
 * @param $type string label's type, default = text, can be text password or email
 */
function form_input_text($label, $name, $size, $value, $type='text') {
    echo "
        <!-- form_input : $label $name $size $value $type -->
        <div class='form-group'>
            <label for='$name'>$label</label>
            <input type='$type' class='form-control' id='$name' name='$name' size='$size' value='$value' >
        </div>
    ";
}

/** Creates a bootstrap select
 * @param $label string select's html label
 * @param $name string select's html name
 * @param $multiple mixed select's html multiple parameter
 * @param $size int|string select's size
 * @param $list array options list
 */
function form_select($label, $name, $multiple, $size, $list) {
    $listString = implode("|",$list);
    // begin select
    echo "
        <!-- form_select : $label $name $multiple $size $listString -->
        <div class='form-group'>
            <label for='$name' >$label</label>
            <select class='form-control' size='$size' id='$name' name='$name";
    // multiple option
    if(is_null($multiple) or $multiple=='') echo "'>\n";
    else echo "[]' multiple='multiple'>\n";
    // add options
    foreach ($list as $option) {
        echo "<option>$option</option>\n";
    };
    // end select
    echo "</select></div>";
}

/** Creates a reset button
 * @param $value string value of the button
 */
function form_input_reset($value) {
    echo "
        <!-- form_input_reset : $value -->
        <input type='reset' value='$value'>
    ";
}

/** Creates a submit button
 * @param $value string value of the button
 */
function form_input_submit($value) {
    echo "
        <!-- form_input_submit : $value -->
        <input type='submit' value='$value'>
    ";
}

/** Creates a hidden input
 * @param $key mixed input's key (name)
 * @param $value mixed input's value
 */
function form_input_hidden($key, $value){
    echo "
        <!-- form_input : $key $value -->
        <input type='hidden' name='$key' value='$value' >
    ";
}

/**
 * Ends a Bootstrap form
 */
function form_end() {
    echo "</form>";
}