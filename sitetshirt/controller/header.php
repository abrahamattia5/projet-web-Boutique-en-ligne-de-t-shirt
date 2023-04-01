<?php 

$se = 0;

if(isset($_SESSION['utilisateur'])){
	if($_SESSION['utilisateur'] == 'client'){
		$se = 1 ; 

	}elseif($_SESSION['utilisateur'] == 'admin'){
		$se = 2 ;  

	}
}

if(isset($_GET['deco'])){
	$styleCss = "vue/css/deco.css";
}
elseif(isset($_GET['ajoutProd'])){
	$styleCss = "vue/css/ajoutProd.css";
}
elseif(isset($_GET['profil'])){
	$styleCss = "vue/css/profil.css";
}
elseif(isset($_GET['co'])){
	$styleCss = "vue/css/connexion.css";
}
elseif(isset($_GET['refus'])){
	$styleCss = "vue/css/refus.css";
}
elseif(isset($_GET['inscription'])){
	$styleCss = "vue/css/inscription.css";
}
elseif(isset($_GET['liste'])){
    $styleCss = "vue/css/liste.css";
}
elseif(isset($_GET['article'])){
	$styleCss= "vue/css/article.css";
}
elseif(isset($_GET['panier'])){
	$styleCss = "vue/css/panier.css";
}
elseif(isset($_GET['gestionStock'])){
	$styleCss = "vue/css/gestionStock.css";
}
else {
	$styleCss = "vue/css/acceuil.css";
}

require"vue/header.php";?>


