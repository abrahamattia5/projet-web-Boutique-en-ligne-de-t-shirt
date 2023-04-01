<br><br><a id="redirectionAcceuil" href="index.php">Revenir à l'acceuil</a><br><br>
<p>Veuillez remplir les informations suivantes pour pouvoir rajouter ce produit au catalogue : </p>

<form action="model/nvProd.php" method="post">
	
	<br><br><br>
	<label for="nom">Nom : </label>
	<input type="text" name="nom" id="nom"  required><br><br>

	<label for="description">Description : </label>
	<input type="text" name="description" id="description" required><br><br>

	<label for="Photo">Photo de l'article : </label>
	<input type="text" name="src" id="src"required ><br><br>

	<label for="Composition">Composition : </label>
	<input type="text" name="composition" id="composition"required><br><br>

	<label for="couleur">Couleur : </label>
	<input type="text" name="couleur" id="couleur" required><br><br>

	<label for="coupe">Coupe : </label>
	<input type="text" name="coupe" id="coupe" required><br><br>

	<label for="reference">Référence de l'article : </label>
	<input type="text" name="reference" id="reference" required><br><br>

	<label for="prix">Prix : </label>
	<input type="text" name="prix" id="prix" required><br><br>

	<label for="id_categorie">id_categorie : </label>
	<input type="text" name="id_categorie" id="id_categorie" required><br><br>

	<label for="longM">Longueur des manches : </label>
	<input type="text" name="longM" id="longM" required><br><br>

	<label for="Encolure">Encolure: </label>
	<input type="text" name="encolure" id="encolure" ><br><br>

	<label for="Entretien">Entretien : </label>
	<input type="text" name="entretien" id="entretien" ><br><br>

	<label for="quantite">Quantite :  </label>
	<input type="text" name="quantite" id="quantite" ><br><br>

	<button>Enregistrer  l'article dans le catalogue</button><br><br><br><br>
</form>
