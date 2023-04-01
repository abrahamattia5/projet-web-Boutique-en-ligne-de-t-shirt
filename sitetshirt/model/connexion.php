<?php
session_start();
require"model.php";
extract($_POST);

$rev = checking($identifiant , $mdp);
$admin = check($identifiant, $mdp);
if($rev || $admin)  {
		if($rev){
			$_SESSION['utilisateur'] = "client" ;
			echo $_SESSION['utilisateur'];
		}
		elseif($admin){
			$_SESSION['utilisateur'] = "admin";
			echo $_SESSION['utilisateur'] ; 
			
		}
		else{
			echo "pas Connecté " ; 
		}

	header("location:../");
}

else {
	header("location:../index.php?refus");
}
