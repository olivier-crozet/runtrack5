<?php


function getUsers()
{
    
include("../models/Utilisateurs.php");

foreach ($result as $row) {
    print $row["firstname"] . "-" . $row["lastname"] ."<br/>";
    }
};

?>