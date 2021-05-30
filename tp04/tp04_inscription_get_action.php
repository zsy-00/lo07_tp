<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>formulaire</title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp04_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Traitement en PHP d'un formulaire (méthode GET)</h4>
            </div>
            <div class="panel-body">
                Liste des paramètres reçus
            </div>
        </div>
            <div class=" table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>valeur(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>nom</td>
                            <td><?php echo $_GET["a"]; ?></td>
                        </tr>
                        <tr>
                            <td>prenom</td>
                            <td><?php echo $_GET["b"]; ?></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><?php echo $_GET["c"]; ?></td>
                        </tr>
                        <tr>
                            <td>date_naissance</td>
                            <td><?php echo $_GET["d"]; ?></td>
                        </tr>
                        <tr>
                            <td>sexe</td>
                            <td><?php echo $_GET["e"]; ?></td>
                        </tr>
                        <tr>
                            <td>origine</td>
                            <td><?php echo $_GET["f"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST07</td>
                            <td><?php echo $_GET["g"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST09</td>
                            <td><?php echo $_GET["h"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST10</td>
                            <td><?php echo $_GET["i"]; ?></td>
                        </tr>
                        <tr>
                            <td>SE</td>
                            <td><?php echo $_GET["j"]; ?></td>
                        </tr>
                        <tr>
                            <td>modules</td>
                            <td><?php foreach ($_GET["k"] as $value) {
                                      echo $value.", ";
                                }  ?></td>
                        </tr>
                        <tr>
                            <td>textarea</td>
                            <td><?php echo $_GET["l"]; ?></td>
                        </tr>
                    </tbody>
                </table>
             </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4> Mes réponses aux questions...</h4>
                </div>
                <div class="panel-body">
                    Liste des questions de la section 2.7
                </div>
            </div>
            
            
                <div class="table-responsive">
                    <table class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Questions</th>
                                <th>Réponses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Question 7.1</td>
                                <td>La zone de texte n'affiche rien</td>
                            </tr>
                            <tr>
                                <td>Question 7.2</td>
                                <td>on doit préciser le type="radio"/ type="checkbox"</td>
                            </tr>
                            <tr>
                                <td>Question 7.3</td>
                                <td>on utilise $GET["name"]/$POST["name"]</td>
                            </tr>
                             <tr>
                                <td>Question 7.4</td>
                                <td>http://localhost/lo07_tp/tp04/tp04_inscription_get_action.php?a=Musk&b=Elon&c=elon.musk@utt.fr&d=1960-01-01&e=M&f=DUT+STID&g=oui&h=non&i=non&j=oui&k=GL02%2C+NF20%2C+LO02&l=Bonjour... on peut changer la valeur de "a" comme:http://localhost/lo07_tp/tp04/tp04_inscription_get_action.php?a=ZHANG&b=Elon&c=elon.musk@utt.fr&d=1960-01-01&e=M&f=DUT+STID&g=oui&h=non&i=non&j=oui&k=GL02%2C+NF20%2C+LO02&l=Bonjour...</td>
                            </tr>
                            <tr>
                                <td>Question 7.5</td>
                                <td>on ne peut pas récupérer la valeur du élément</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
        </div>
        
    </body>
</html>
