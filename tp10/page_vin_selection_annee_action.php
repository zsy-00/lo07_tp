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
    $query="select*from vin order by cru";
        $statement=$database->query($query);
        include 'fragmentVinResultats.php';
               
            
    }
       
    catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
    }
     
        include 'fragmentFooter.html'; 
        ?>

