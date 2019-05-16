<?php
    include('connexionDB.php');

    function inscrire(){
        $db = connection();
        mysqli_query($db, "INSERT INTO inscription(NULL, prenomInscrit, nomInscrit, mobileEmail1, mobileEmail2, mdp, dateNaissance, sexe)
        VALUES (NULL, '$prenom', '$nom', '$tel1', '$tel2', '$mdp', '$naissance', '$sexe')");
    }
?>