<br><br><br>

<a href="index.php">Revenir à l'acceuil</a>

<?php
extract($_POST);

if(isset($_GET['id'])){
	$id = $_GET['id'];
}


$article = presentationArticle($id);

echo "<p id=\"nom\"><br>".$article['nom']."</p>"; ?>
<div id="inforArt">
<img src="<?= $article['src'] ?>" alt ="photoArt">
<ul id="contenu">
	<span><li>composition : <?= $article['composition'] ; ?> </li>
	<li>couleur : <?= $article['couleur'] ; ?></li>
	<li>coupe : <?= $article['coupe'] ; ?></li>
	<li>longueur des manches : <?= $article['longueur des manches'] ; ?></li>
	<li>encolure : <?= $article['encolure'] ; ?></li>
	<li>entretien : <?= $article['entretien'] ; ?></li></span>
</ul>



<form id="ff" method="post" action="model/ajoutPanier.php" >
		<label for="taille">Choisissez une taille : </label>
		<select name="taille" id="taille" class="taille" required>
			<option value=""></option>
			<option value="XS">XS</option>
			<option value="S" >S</option>
			<option value="M">M</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
		</select> <br><br><br>

		<?php

		if(isset($_SESSION['utilisateur'])){ ?>

			<label for="qte">Choisissez une quantité : </label>
			<select name="quantite" class="qte" id="qte" required>
				<option value=""></option>
				<?php for($i=1; $i<= 15 ; $i++){?>
				<option value="<?= $i ; ?>"><?= $i ;?></option><?php } ?>
			</select><br>

			<input type="hidden" name="id_session" value="<?= session_id(); ?>">
			<input type="hidden" name="id_produit" value="<?= $article['id']; ?>">

			<br><br><br><br><br>
			<button type="submit" id="sub">Ajouter au panier</button>


		<?php } 
		else { ?>

			<a href="index.php?co">Ajouter au panier en se connectant</a> <?php } ?>

</form>

</div>

<br><br><br><br><br>