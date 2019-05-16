<?php
//fonction de connexion à la base de données

    function connection(){
        
        $connex = mysqli_connect('localhost','root','','testStage');

        if(!$connex){
            throw new Exception("Connexion impossible");
        }
         return $connex;
    }

?>