<br><br><br>
<!-- a supprimer de toutes le spages puis a inserer dans le cotroller -->
<a id="redirectionAcceuil" href="index.php">Revenir à l'acceuil</a><br><br>
<div id="lesarticles">
	<?php

	$prix = 0 ; 

	$sql = panier(session_id()) ; 
	while($panier = $sql ->fetch()){ ?> 
		<div id="article">
			<img id="img" src="<?= $article['src'] ?>" alt="photoArticle">
			<?php $article = presentationArticle($panier['id_produit']); ?>
			<div id="info">
				<div id="qn">
					<?php echo "<p >nom : ". $article['nom']."<br></p><br>" ; 
					echo "<p >quantite : " .$panier['quantite']."<br></p>";?> 
				</div>
				<div id="tp">
					<?php echo "<p>taille : ".$panier['taille'] ."<br></p><br>"; 
					echo"<p>prix : ".$article['prix']." $ <br></p>"; ?>
				</div> 
			</div>
			<a href="model/retirerArticle.php?id=<?= $panier['id_produit']?>&amp;taille=<?= $panier['taille']?>" id="a">retirer l'article</a><br>

			<?php $prix = $prix + $article['prix']* $panier['quantite']; ?> 
		</div> <?php } ?>

</div><?php 
echo "<p id=\"infoArticle\"> total : " . $prix ."$</p>"; 
if($prix == 0 ){
	echo "<p id=\"infoArticle\"><br><br><br>Votre panier est vide </p>";
}

//if(isset($_SESSION)){
//	echo "il y a bien une variable de session";
//}


 ?>