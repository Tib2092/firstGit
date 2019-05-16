<?php

include('model/inscrit.php');


//Récupération des variables envoyées par le formulaire viewIscription.php
if((isset($_POST['prenom']) && $_POST['prenom']!="")
&& (isset($_POST['nom']) && $_POST['nom']!="")
&& (isset($_POST['tel']) && $_POST['tel1']!="")
&& (isset($_POST['tel2']) && $_POST['tel2']!="") 
&& (isset($_POST['pass']) && $_POST['pass']!="")
&& (isset($_POST['naissance']) && $_POST['naissance']!="")
&&(isset($_POST['sexe']) && $_POST['sexe']!="")
){

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $mdp = $_POST['pass'];
    $naissance = $_POST['naissace'];
    $sexe = $_POST['sexe'];
}

//Verification de la saisie
if($tel1 == $tel2){


    //enregistrement des informations fournies à la base de données
    inscrire();

} else{
    echo "Les numéros de téléphones ou email saisis doivent etre identiques";

}

?>