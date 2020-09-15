<?php


function getUsers()
{
    
include("./models/Utilisateurs.php");
  new Utilisateurs_model;
var_dump($query);
 
foreach ($result as $row) {
    print $row["firstname"] . "-" . $row["lastname"] ."<br/>";
    }
};

?>