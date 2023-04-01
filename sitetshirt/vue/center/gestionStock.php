<br><br><a id="redirectionAcceuil" href="index.php">Revenir à l'acceuil</a><br><br>


<h3>Bienvenue sur la plateforme de gestion de vos produits </h3>

<a id="a" href="index.php?ajoutProd">Pour ajouter un produit cliquez ICI</a><br><br><br><br>
<div id="lesarticles">	
	<?php 
	$vzr = stock();

	while($var = $vzr ->fetch()){ ?>
		<div id="article">
			
			<img id="photo" src="<?= $var['src']; ?>" alt="<?=$var['nom']; ?>" ><br><br><br>
			<div id="description">
			<?php echo 'Nom : '. $var['nom']. '<br><br>quantité en stock : '.$var['quantite'].'<br><br> '  ; ?><br> <!--modifier la quantite : ' -->
			<div id="form">
			<form action="model/modifQtt.php" method="POST">
				<input type="hidden" name="id" value="<?= $var['id'] ?>"><br>
				<button>mettre à jour la quantité</button><br><br>
				<select name="quantite" class="qte" required>
					<?php for($i=1; $i<= 200 ; $i++){?>
					<option value="<?= $i ; ?>"><?= $i ;?></option><?php } ?>
				</select><br></div>
			</form>
			</div>
		
		<a href="model/supprimerDuStock.php?id=<?= $var['id']?>">retirer l'article du catalogue </a><br><br><br>

		</div>
	<?php } ?>
</div>

