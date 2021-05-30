<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>post</title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp04_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Traitement en PHP d'un formulaire (méthode POST)</h4>
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
                            <td><?php echo $_POST["a"]; ?></td>
                        </tr>
                        <tr>
                            <td>prenom</td>
                            <td><?php echo $_POST["b"]; ?></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><?php echo $_POST["c"]; ?></td>
                        </tr>
                        <tr>
                            <td>date_naissance</td>
                            <td><?php echo $_POST["d"]; ?></td>
                        </tr>
                        <tr>
                            <td>sexe</td>
                            <td><?php echo $_POST["e"]; ?></td>
                        </tr>
                        <tr>
                            <td>origine</td>
                            <td><?php echo $_POST["f"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST07</td>
                            <td><?php echo $_POST["g"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST09</td>
                            <td><?php echo $_POST["h"]; ?></td>
                        </tr>
                        <tr>
                            <td>ST10</td>
                            <td><?php echo $_POST["i"]; ?></td>
                        </tr>
                        <tr>
                            <td>SE</td>
                            <td><?php echo $_POST["j"]; ?></td>
                        </tr>
                        <tr>
                            <td>modules</td>
                            <td><?php foreach ($_POST["k"] as $value) {
                                      echo $value.", ";
                                }  ?></td>
                        </tr>
                        <tr>
                            <td>textarea</td>
                            <td><?php echo $_POST["l"]; ?></td>
                        </tr>
                    </tbody>
                </table>
             </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4> Mes réponses aux questions...</h4>
                </div>
                <div class="panel-body">
                    Liste des questions de la section 3.5
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
                                <td>Question 5.1</td>
                                <td>les paramètres sur l'URL est caché quand on utilise POST</td>
                            </tr>
                            <tr>
                                <td>Question 5.2</td>
                                <td>j'ai cherche sur l'internet ^_^ Lorsqu’il s’agit de transmettre des données sensibles au serveur, par exemple un formulaire d’inscription avec nom d’utilisateur et mot de passe, la méthode POST permet de garder la confidentialité nécessaire. Les données ne sont pas mises en cache et n’apparaissent pas dans l’historique de navigation. La flexibilité est également de mise avec POST : non seulement des textes courts, mais aussi des données de toute taille et de tout type peuvent être transmis, comme des photos ou des vidéos.</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            
        </div>
    </body>
</html>
