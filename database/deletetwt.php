<link href="style.css" rel="stylesheet">
<?php

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == "suppr") {
    $tweetASupprimer = [
        'ids' => $_POST['supprimertwt']
    ];

    $suppr = $database->prepare('DELETE FROM tweet WHERE ids = :ids');
    if ($suppr->execute($tweetASupprimer)) {
        echo "Votre tweet a bien été supprimé";
    } else {
        echo "Erreur lors de la suppression du tweet";
    }
}
?>