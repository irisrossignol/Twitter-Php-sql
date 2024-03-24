<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav class="nav">
  <ul>
    <li><a href="inscription.php">INSCRIPTION</a></li>
    <li><a href="ajouttweet.php">NOUVEAU TWEET</a></li>
  </ul>
</nav>
</header>


<!-- Voir tous les tweet et rechercher un tweet (du plus récent au plus ancien) -->

<h1>TOUS LES TWEETS : </h1>

<form class="rch" action="#" method="GET">
    <p>Rechercher un tweet</p> 
    <input type="text" name="recherche">
</form>


<?php require 'database.php'; ?>


<?php foreach($tweets as $tweet) : ?>
    <form action="deletetwt.php" method="POST">
        <input type="hidden" name="form" value="suppr">
        <div class="twt">
        <?php echo  '@' . $tweet['pseudo'] . ' : ' . $tweet['contenu'] . '<br>' . 'publié le : ' . $tweet['createAt'] . '<br>';?>
        </div>
        <input type="hidden" name="supprimertwt" value="<?php echo $tweet['ids']; ?>">
        <div class="btn">
  <button type="submit">Supprimer</button>
</div>
    </form>
<?php endforeach; ?>
