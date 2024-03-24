<!-- Ajouter un tweet/supprimmer un tweet (tweet lié à l'utilisateur)-->
<link href="style.css" rel="stylesheet">

<h1> Ajouter un tweet</h1>

<form action="database.php" method="POST">
<input type="hidden" name="form" value="ajouttwt">

<label for="tweet">Tweet </label>
<input type="text" name="tweet" id="tweet">

<button type="submit">Poster</button>
</form>



