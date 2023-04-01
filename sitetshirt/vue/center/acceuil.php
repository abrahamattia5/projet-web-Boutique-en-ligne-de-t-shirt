<br><br><br><br><br><br><br><br><br>

<?php 
$req = categorie();?>
<div id="lescategories">
	<?php while($categorie = $req->fetch()){?> 	
	<div id= "categorie<?= $categorie['nom']; ?>">
		<a id="cat" href="index.php?liste=<?= $categorie['id'] ; ?>"><?= $categorie['nom']; ?></a>
	</div>
<?php } ?>  
</div><br><br><br><br><br><br><br><br>

