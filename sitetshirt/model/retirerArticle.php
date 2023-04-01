<?php 

require"model.php" ; 

$sql = supprimerArticle($_GET['id'] , $_GET['taille']);

header("location:../index.php?panier");