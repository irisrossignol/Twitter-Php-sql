<!-- Utilisateurs pourrons s'inscrire -->

<link href="style.css" rel="stylesheet">

<h1>S'inscrire</h1> 

<form action="database.php" method="POST">
<input type="hidden" name="form" value="ajout">

<label for="pseudo">Pseudo </label>
<input type="text" name="pseudo" id="pseudo">

<label for="password">Password</label>
<input type="password" name="password" id="password">

<label for="email">Email</label>
<input type="text" name="email" id="email">

<button type="submit">Envoyer</button>
</form>


<!-- Voir tous les comptes et supprimer un utilisateur -->

<h1>Tous les comptes</h1>

<?php require 'database.php';

foreach($users as $user) : ?>

        <form action="delete.php" method="POST">
            <input type="hidden" name="form" value="supp">
            <?php echo '<li>' . $user['pseudo'] . ' ' . $user['email'] . '</li>'; ?>
            <input type="hidden" name="supprimer" value="<?php echo $user['id']; ?>">
            <button type="submit" >Supprimer</button>
        </form>
    <?php
endforeach; 
?>