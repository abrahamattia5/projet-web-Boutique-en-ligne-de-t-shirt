<?php 

session_start();

extract($_POST);
require "model.php";
$rev = inscription($identifiant , $mdp);

if($rev) {
	$_SESSION['utilisateur']= 'client' ;
	//echo $se ; 
	header("location:../");	
}

else{
	echo "Un probleme est survenu lors de l'inscription<br>Veuillez réesayer";
}

