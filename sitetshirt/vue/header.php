<!DOCTYPE html>
<html>
<head>
	<title>M2L</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= $styleCss; ?> ">

<body>


	<!--<div id="menuheader">
		<?php
		$req = categorie();
		while($categorie = $req->fetch()){?>
			<a href="index.php?liste=<?= $categorie['id'] ; ?>" id="lienCategorie" ><?= $categorie['nom']; ?></a> 
		<?php } ?> 
	</div> -->

	<div id="slogan"><a id="titreheader" href="index.php">M2L Project <br><br> Vente de matériel sportif</a></div>



	<!-- </div> -->

	<div id="pro">
			<?php if($se == 1 ||  $se == 2) { ?>
					<a href="index.php?profil">Mon compte</a>
					
					<?php if($se == 2){ ?>
							<a href="index.php?gestionStock">Voir les articles en ligne</a>
							<?php } 
						  else { ?>
							<a href="index.php?panier">Voir le panier</a>
							<?php } ?>

					<a href="index.php?deco">Deconnexion</a><?php 
					}

				else {  ?>
					<a href="index.php?co">Se Connecter</a>
					<a href="index.php?inscription">S'inscrire</a>
					<?php } ?>

	</div>



