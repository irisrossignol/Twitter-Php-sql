<link href="style.css" rel="stylesheet">
<?php

    require 'database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == "supp") {
        $idASupprimer = [
            'id' => $_POST['supprimer']
        ];
    
        $supp = $database->prepare('DELETE FROM user WHERE id = :id');
        $supp->execute($idASupprimer);
    }


    if ($supp->execute($idASupprimer)) {
        echo "Utisateur bien supprimé";
    } else {
        echo "Erreur";
    }

