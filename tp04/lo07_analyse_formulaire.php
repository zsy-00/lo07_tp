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
        <link href="tp04_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
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
                                <th>valeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                         
                             <?php foreach ($_GET as $key => $value) {?>
                                    <tr>      
                                        <td><?php  echo $key ; ?></td>
                                        <td><?php if(is_array($value)){
                                                  foreach ($_GET["modules"]as $valeur) {
                                                  echo $valeur.", ";}}
                                                  else  {if(isset($_GET)) {echo $value ;}}
                                            ?></td>
                                    </tr>      
                          
                              <?php   } ?>
                                    
                               <?php foreach ($_POST as $key => $value) {?>
                                    <tr>      
                                       <td><?php echo $key ; ?></td>
                                       <td><?php if(is_array($value)){
                                                 foreach ($_POST["modules"] as $v) {
                                                 echo $v.", ";
                                                  }}
                                                  else  {if(isset($_POST)) {echo $value ;}}
                                            ?></td>
                                    </tr>      
                          
                              <?php   } ?>
                                  
                        </tbody>
                    </table>
                </div>
            
        </div>
        </div>    
    </body>
</html>
