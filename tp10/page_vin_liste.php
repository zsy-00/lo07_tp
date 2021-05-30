<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('bibliotheque.php');
?>

<?php include 'fragmentHeader.html';?>
<body>
    <div class="container">
       
        <?php
        include 'fragmentMenu.html';
        include 'fragmentJumbotron.html';
        include 'fragmentDatabaseConfig.php';
        try{
    $database = new PDO($dsn, $username, $password);
    
    $requete="select * FROM vin";
    $resultats = $database->query($requete); 
    panel_head("Liste des Vins(select*from vin order by id)");
    echo ("<table class = 'table table-bordered'>");
    echo ("<tr class = 'danger'>" );
    for($j=0;$j < $resultats ->columnCount(); $j++){                           
             echo "<th>".$resultats->getColumnMeta($j)['name']."</th>";            
                        }
    echo "</tr>";      
    echo '<tbody> ';    
    while ($row =$resultats ->fetch(PDO::FETCH_ASSOC) ){
        echo"<tr class = 'success'>";
        for($i=0;$i < $resultats ->columnCount(); $i++){                 
          echo "<td>" .$row[$resultats->getColumnMeta($i)['name']] . "</td>";           
 }
     echo"</tr>" ;
        }
  
    echo"</tbody>";   
    echo("</table>");  
    
    $query="select*from vin order by cru";
        $statement=$database->query($query);
        include 'fragmentVinResultats.php';
               
            
    }
       
    catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
    }
     
        include 'fragmentFooter.html'; 
        ?>
