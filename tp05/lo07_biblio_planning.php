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
    </head>
    <body>
        <?php
        function listeJourLabel(){
            return array(
                "lundi"=>"lundi",
                "mardi"=>"mardi",
                "mercredi"=>"mercredi",
                "jeudi"=>"jeudi",
                "vendredi"=>"vendredi",
            );
        }
        function listeJourIndice(){
            return array(
                "1"=>"1",
                "2"=>"2",
                "3"=>"3",
                "4"=>"4",
                "5"=>"5",
                "6"=>"6",
                "7"=>"7",
                "8"=>"8",
                "9"=>"9",
                "10"=>"10",
                "11"=>"11",
                "12"=>"12",
                "13"=>"13",
                "14"=>"14",
                "15"=>"15",
                "16"=>"16",
                "17"=>"17",
                "18"=>"18",
                "19"=>"19",
                "20"=>"20",
                "21"=>"21",
                "22"=>"22",
                "23"=>"23",
                "24"=>"24",
                "25"=>"25",
                "26"=>"26",
                "27"=>"27",
                "28"=>"28",
                "29"=>"29",
                "30"=>"30",
                "31"=>"31",
               
            );
        }
        
        function listeMois(){
            return array(
                "janvier"=>"janvier",
                "février"=>"février",
                "mars"=>"mars",
                "avril"=>"avril",
                "mai"=>"mai",
                "juin"=>"juin",
                "juillet"=>"juillet",
                "août"=>"août",
                "septembre"=>"septembre",
                "octobre"=>"octobre",
                "novembre"=>"novembre",
                "décembre"=>"decembre",
            ); 
       }
       
       /*for ($i=8;$i<12;$i++){
               echo "\"".$i."h00\"=>\"".$i."h00\",".'</br>';
               echo "\"".$i."h20\"=>\"".$i."h20\",".'</br>';
               echo "\"".$i."h40\"=>\"".$i."h40\",".'</br>';    
        }
       for ($i=14;$i<18;$i++){
               echo "\"".$i."h00\"=>\"".$i."h00\",".'</br>';
               echo "\"".$i."h20\"=>\"".$i."h20\",".'</br>';
               echo "\"".$i."h40\"=>\"".$i."h40\",".'</br>';
       }*/
       function listeSeance(){
           return array(
           "8h00"=>"8h00",
"8h20"=>"8h20",
"8h40"=>"8h40",
"9h00"=>"9h00",
"9h20"=>"9h20",
"9h40"=>"9h40",
"10h00"=>"10h00",
"10h20"=>"10h20",
"10h40"=>"10h40",
"11h00"=>"11h00",
"11h20"=>"11h20",
"11h40"=>"11h40",
"14h00"=>"14h00",
"14h20"=>"14h20",
"14h40"=>"14h40",
"15h00"=>"15h00",
"15h20"=>"15h20",
"15h40"=>"15h40",
"16h00"=>"16h00",
"16h20"=>"16h20",
"16h40"=>"16h40",
"17h00"=>"17h00",
"17h20"=>"17h20",
"17h40"=>"17h40",
           );
       }
       
       function listform1(){
           return array(
               "2"=>"2",
               "3"=>"3",
               "4"=>"4",
               "5"=>"5",
           );
       }
        ?>
        
        
        
    </body>
</html>
