<?php
    class Utilisateurs_lmode{



    public function getUsers(){
  include('config/db.php');
  
  $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass );

        $query = $db->prepare("SELECT * FROM utilisateurs ");
        $query->execute();
        $result = $query->fetchAll();

        if($result === 1){
        return true;
        } else {
        return false;
         }     
      }
        
    };
?>