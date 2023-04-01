<?php 

require"model.php" ; 
extract($_POST);

/*$id_categorie = 3 ; 
$nom = "t-shirt_" ; 
$composition =' 100 % coton ' ;  
$couleur='noire';
$coupe='regular';
$reference='ref : 05976	';
$prix= '20 ';
$longM='manches courtes ';
$encolure='col en V ';
$description='T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.' ; 
$entretien='lavable a 35°';
$src = 'photo/t-shirt_.jpg';

*/

$req = ajouter($id_categorie,$nom,$composition,$couleur,$coupe,$reference,$prix,$longM,$encolure,$description,$entretien,$src, $quantite);



/*if ($req){
	echo 'bravo ta reussi , tu vois que tu ne fais pas que de la D ET TU FAIS MEME DU TRES BIEN ' ;
	}
	else {
	echo "pas ENCORE réussi";


	}*/

header("location:../index.php?gestionStock");