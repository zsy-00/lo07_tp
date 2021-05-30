<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cru</th>
            <th scope="col">année</th>
            <th scope="col">degré</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        while($tuple=$statement->fetch()){
        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.2f</td></tr>\n",
                $tuple['id'],$tuple['cru'],$tuple['annee'],$tuple['degre']);
        }
        echo("</tbody></table>");
        ?>
