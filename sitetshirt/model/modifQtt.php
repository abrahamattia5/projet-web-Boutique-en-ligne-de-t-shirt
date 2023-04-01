<?php require"model.php" ; 

$mod = modifQtt($_POST['quantite'] , $_POST['id']);


echo $mod . ' entrées ont été modifiées !';


header("location:../index.php?gestionStock");