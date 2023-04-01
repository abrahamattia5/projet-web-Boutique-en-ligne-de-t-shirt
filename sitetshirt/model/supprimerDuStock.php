<?php 

require"model.php" ; 

$sql = supprimerArticleStock($_GET['id']);


header("location:../index.php?gestionStock");