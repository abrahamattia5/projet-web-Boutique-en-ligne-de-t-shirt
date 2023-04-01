<?php
/*function dbConnect() {
$host_name = 'db5002289094.hosting-data.io';
  $database = 'dbs1843855';
  $user_name = 'dbu667372';
  $password = 'Elie.050999';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  } return $db ;
} */

function dbConnect() {

try{
	$db = new PDO ('mysql:host=localhost;port=3308;dbname=sitetshirt;charset=utf8' , 'root' , '');
	}
catch(Exception $e)
	{
	die('Erreur : '.$e->getMessage());
	}
	return $db ;
}

function ajouter($id_categorie,$nom,$composition,$couleur,$coupe,$reference,$prix,$longM,$encolure,$description,$entretien,$src, $quantite) {
	$db = dbConnect();
	$sql = "INSERT INTO `article`(`id_categorie`, `nom`, `composition`, `couleur`, `coupe`, `reference`, `prix`, `longueur des manches`, `encolure`, `description`, `entretien` , `src` , `quantite`) VALUES ($id_categorie,'$nom','$composition','$couleur','$coupe','$reference',$prix,'$longM','$encolure','$description','$entretien' , '$src' , '$quantite')";
	$req = $db->query($sql);


	if ($req){
	echo 'bravo ta reussi , tu vois que tu ne fais pas que de la D ET TU FAIS MEME DU TRES BIEN ' ;
	}
	else {
	echo "pas ENCORE réussi";
	}
}
/*  $i = 'violet' ;
$id_categorie = 3 ;
$nom = "t-shirt_".$i ;
$composition =' 100 % coton ' ;
$couleur=$i;
$coupe='regular';
$reference='ref : 05976	';
$prix= '20 ';
$longM='manches courtes ';
$encolure='col en V ';
$description='T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.' ;
$entretien='lavable a 35°';
$src = 'photo/t-shirt_'.$i.'.jpg';

ajouter($id_categorie,$nom,$composition,$couleur,$coupe,$reference,$prix,$longM,$encolure,$description,$entretien , $src) ;
*/
function categorie(){
	$db=dbConnect();
	$req = $db->query("SELECT * FROM categorie");
	return $req ;
}

function listeArticle($id_categorie) {
	$db = dbConnect();
	$res = $db ->query("SELECT * FROM article WHERE id_categorie = '$id_categorie' ");
	return $res;
}

function listeStock() {
	$db = dbConnect();
	$sto = $db->query('SELECT a.nom nom , a.src image , a.prix prix , c.nom categorie FROM article a LEFT JOIN categorie c ON c.id = a.id_categorie');
	return $sto ;
}

function stock(){
	$db = dbConnect();
	$vzr = $db ->query('SELECT id , nom , prix, src , quantite FROM article ');
	return $vzr ;
}


function checking($identifiant , $mdp){
	$db = dbConnect();
	$rev =  $db ->query("SELECT * FROM user WHERE identifiant = '$identifiant' AND mdp = '$mdp' ")->fetch();
	return $rev;
}

function check($identifiant , $mdp){
	$db = dbConnect();
	$admin =  $db ->query("SELECT * FROM adminid WHERE identifiant = '$identifiant' AND mdp = '$mdp' ")->fetch();
	return $admin;
}



function inscription ($identifiant , $mdp){
	$db = dbConnect();
	$ref = $db->exec("INSERT INTO user (identifiant , mdp) VALUES ('$identifiant' , '$mdp')");
	return $ref ;

}

function presentationArticle($id) {
	$db = dbConnect();
	$dev = $db -> query("SELECT * FROM article WHERE id = '$id' ");
	$article = $dev ->fetch() ;
	return $article ;
}

function ajouterPanier($id , $produit , $quantite , $taille ){

	$db= dbConnect();
	$sql = $db->exec("INSERT INTO panier (id_session, id_produit, quantite, taille, date_r) VALUES ('$id' , '$produit', '$quantite', '$taille', NOW())");
	return $sql ;
}


function supprimerArticle($id , $taille){
	$db = dbConnect();
	$sql = $db->query("DELETE FROM panier WHERE id_produit = '$id' AND taille = '$taille' ");
	return $sql ;
}

function supprimerArticleStock($id){
	$db = dbConnect();
	$stk = $db ->query("DELETE FROM article WHERE id= '$id' ");
	return $stk ;
}

function panier($id_session){
	$db = dbConnect();
	$sql = $db->query("SELECT * FROM  panier WHERE id_session = '$id_session' ");
	return $sql ;
}

function modifQtt ($quantite , $id) {
	$db = dbConnect();
	$mis = $db->exec("UPDATE article SET quantite = '$quantite' WHERE id = '$id' ");
	return $mis ;
}

?>
