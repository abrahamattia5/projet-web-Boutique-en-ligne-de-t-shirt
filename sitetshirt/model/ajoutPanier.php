<?php 

session_start();
extract($_POST);

require "model.php" ; 

// CREER OU AJOUTER LA FONCTION AJOUTER OU MAJ PANIER 

$db = dbConnect();
$sql = $db->query("SELECT * FROM panier WHERE id_session = '$id_session' AND id_produit = '$id_produit' AND taille = '$taille' ");
$reponse = $sql->fetch(); 

if($reponse){
	$sql = $db ->query("UPDATE panier SET quantite = quantite + '$quantite' WHERE id_session = '$id_session' AND id_produit = '$id_produit' AND taille = '$taille' ");
	if($sql){
		header("location:../index.php?article&id=$id_produit");
		echo "string";
	}
	else{
		echo "ERREUR DANS LA MAJ";
	}
	
}
else {
	ajouterPanier($id_session , $id_produit , $quantite , $taille ) ;
	header("location:../index.php?article&id=$id_produit ");  
}
