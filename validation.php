<?php
      
      $repInclude = './include/';
      require($repInclude . "_init.inc.php");

        if($_POST['choice'] == "valider") { 
            
            $sql = "UPDATE fichefrais SET idEtat = 'VA' WHERE idvisiteur = 'c54';";
            $result = $idConnexion->query($sql);
        } 
        if($_POST['choice'] == "refuser") { 
            
        } 

       
     header("Location: http://localhost/applifrais/cValiderFicheFraisComptable.php");
        exit();
       
    ?> 