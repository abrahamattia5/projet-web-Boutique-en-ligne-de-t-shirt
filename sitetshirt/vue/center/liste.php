<br><br><a id="redirectionAcceuil" href="index.php">Revenir à l'acceuil</a><br><br>
<?php  
/*
if ($se == 2) {
	*/ ?>
	<!-- <form action="" method="post" enctype="multipart/form-data">
		<input type="" name="">
 		  <input type="file" name="file">
	</form> -->
<div id="lesarticles" >
		<?php $res = listeArticle($_GET['liste']); ?> 
		<?php 
		while($article = $res ->fetch()){ ?>
			<div id="article">
			<form method="post" action="index.php?article">
				<input type="hidden" name="id" value="<?= $article['id'] ; ?>">
				<input type="image" id="photo" alt="<?= $article['nom']; ?>" src="<?= $article['src']; ?>">
				<div id="description">
				<button><?= $article['nom']; ?></button>
				<?php echo"<br>composition : ".$article['composition']."<br>Tarif : ".$article['prix']." $<br>";?>
				</div>
			</form>
			</div>
	<?php } ?>
</div>

