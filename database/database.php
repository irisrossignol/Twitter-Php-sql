<link href="style.css" rel="stylesheet">
<?php

try {
    $database = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'root');
}catch(PDOExeption $e) {
    die('Site indisponible');
}

$requete = $database->prepare("SELECT * FROM user");
$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

$requete2 = $database->prepare("SELECT * FROM tweet INNER JOIN user ON tweet.user_id = user.id ORDER BY tweet.createAt DESC");
$requete2->execute();
$tweets = $requete2->fetchAll(PDO::FETCH_ASSOC);



if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajout') {

    if($_POST['pseudo'] != '' && $_POST['email']) {

        $nouvelUser = [
            'pseudo' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $requete = $database->prepare("INSERT INTO user (pseudo, email, password) VALUES (:pseudo, :email, :password) ");

        if ($requete->execute($nouvelUser) ) {
            echo "Votre compte a bien été créée";
        } else {
            echo "Erreur lors de l'ajout";
        }

    } else {
        echo 'formulaire incomplet';
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajouttwt') {

    if($_POST['tweet'] != '') {

        $nouveautweet = [
            'contenu' => $_POST['tweet'],
        ];

        $requete2 = $database->prepare("INSERT INTO tweet (contenu) VALUES (:contenu) ");

        if ($requete2->execute($nouveautweet)) {
            echo "Votre tweet a bien été ajouté";
        } else {
            echo "Erreur lors de l'ajout";
        }

    } 

}