<?php

$repInclude = './include/';

require($repInclude . "_gestionSession.lib.php");

initSession();

$SQLcomptable = "SELECT role FROM visiteur WHERE id =" . obtenirIdUserConnecte() .";";
$comptSQL = "SELECT role FROM visiteur WHERE id =a00;";


$resSQL= mysqli_query ($SQLcomptable,$idCnx,);
$repSQL = mysqli_query ($comptSQL,$idCnx,)

var_dump($repSQL);
die();



if ($repSQL =$repSQL) {
     header("Location: cAccueilComptable.php");
        
    }
else {
     header("Location: cAcceuil.php");
    }

  ?>
   
