<?php 
session_start();
		if(isset($_SESSION['utilisateur'])){
			echo "la varaible de session utilisateur existe <br><br>";
		}
$_SESSION['utilisateur'] = 'ere' ; 
session_destroy();

if(isset($_SESSION['utilisateur'])){
			echo "la varaible de session utilisateur existe <br><br>";
		}

		echo "se " . $se ;
		 
		

header("location:../");
?>