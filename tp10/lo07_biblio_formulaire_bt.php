<?php

// 20/03/2019 : bibliotheque fonctions formulaire avec bootstrap
// Marc LEMERCIER


// =========================
// form_begin
// =========================

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// =========================
// form_input_text
// =========================

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
 
}

function form_input_hidden($name,$value) {
    echo ("\n<!-- form_input_text :  $name $value -->\n");
    echo ("  <p>\n");
    echo (" <input type='hidden' class='form-control' name='$name' value='$value' >");
} 
// =========================
// form_select
// =========================

// Parametre $label    : permet un affichage (balise label)
// Parametre $name     : attribut pour identifier le composant du formulaire
// Parametre $multiple : si cet attribut n'est pas vide alors sélection multiple possible
// Parametre $size     : attribut size de la balise select
// Parametre $liste    : un liste d'options. Vous utiliserez un foreach pour générer les balises option

function form_select($label, $name, $multiple, $size, $liste) {
// todo ...
    echo ("<div class='form-group'>\n");
    echo("<label>$label</label>\n</br>");
    
    printf ("<select name='%s[]' multiple='multiple' size='%s' style='width:780px;' />\n",$name,$size);
    
    foreach ($liste as $key => $value) {
        printf("<option value='%s'>%s</option>\n",$key,$value);
    }
    echo("</select>\n");
    
    echo("</div>");
}

// =========================

function form_input_reset($value) {
// todo ...
    echo("<p>\n");
    printf("<input type='reset' value='$value'/>" );
    echo("</p>\n");
    
    
 }

// =========================

function form_input_submit($value) {
// todo ...
    echo("<p>\n");
    printf("<input type='submit' value='$value'>");
    echo("</p>\n");
}

// =========================


function form_end() {
// todo ...
    echo("</form>");
}

// =========================

?>


