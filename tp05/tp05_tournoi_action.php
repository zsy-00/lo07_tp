<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp05_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4>SuperGlobale GET</h4>
            </div>
            
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>valeur(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($_GET as $key => $value) {?>
                                    <tr>      
                                        <td><?php  echo $key ; ?></td>
                                        <td><?php echo $value;  ?></td>
                                    </tr>      
                          
                              <?php   } ?>
                             
                       
                            
                        </tbody>
                    </table>
                </div>
            <h4>pour cette partie, Je n'ai que les données de la dernière boucle.Pouvez-vous me donner quelques indices?</h4>
        </div>
        </div>                     
    </body>
</html>
