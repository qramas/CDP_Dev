<?php
/*

Permet la modification d'un atelier en rentrant les différentes informations
parametre example: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
*/
include 'config.php';
error_reporting(E_ALL & ~E_NOTICE);

echo("<head>");
echo("<title>Modifier d'Atelier</title>");
echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>");
echo("</head>");

$nom = $_POST['titre'];
$theme = $_POST['theme'];
$type = $_POST['type'];
$discipline = $_POST['disciplines'];
$duree =$_POST["duree"];
$capacite=$_POST["capacitee"];
$animateur =$_POST['animateurs'];
$adresse= $_POST['adresse'];
$ville= $_POST['ville'];
$codeP =$_POST["cp"];
$zone =$_POST['zone'];
$resume = $_POST['resume'];

if($_POST['pv1']){
	$public ="1";
}
else{
	$public = "0";
}
if($_POST['pv2']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv3']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv4']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv5']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv7']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv8']){
	$public .="1" ;
}
else{
	$public .="0" ;
}
if($_POST['pv9']){
	$public .="1" ;
}
else{
	$public .= "0" ;
}

if($_POST['a1'] && $_POST['pm1']){
	$creneaux="3";
}
elseif($_POST['a1']){
	$creneaux="1";
}elseif($_POST['pm1']){
	$creneaux="2";
}
else $creneaux ="0";
if($_POST['a2'] && $_POST['pm2']){
	$creneaux.="3";
}
elseif($_POST['a2']){
	$creneaux.="1";
}elseif($_POST['pm2']){
	$creneaux.="2";
}
else $creneaux .="0";
if($_POST['a3'] && $_POST['pm3']){
	$creneaux.="3";
}
elseif($_POST['a3']){
	$creneaux.="1";
}elseif($_POST['pm3']){
	$creneaux.="2";
}
else $creneaux .="0";
if($_POST['a4'] && $_POST['pm4']){
	$creneaux.="3";
}
elseif($_POST['a4']){
	$creneaux.="1";
}elseif($_POST['pm4']){
	$creneaux.="2";
}
else $creneaux .="0";
if($_POST['a5'] && $_POST['pm5']){
	$creneaux.="3";
}
elseif($_POST['a5']){
	$creneaux.="1";
}elseif($_POST['pm5']){
	$creneaux.="2";
}
else $creneaux.="0";

$sql =	"UPDATE `ateliers` SET `nom` = '$nom', `theme` = '$theme', 
		`type` = '$type', `discipline` = '$discipline', `public` = '$public', 
		`duree` = '$duree', `capacite` = '$capacite', `animateur` = '$animateur', 
		`adresse` = '$adresse', `ville` = '$ville', `codePostal` = '$codeP', `zone` = '$zone', 
		`creneaux` = '$creneaux', `resume` = '$resume' WHERE `ateliers`.`id` = 1";
		if ($res=$conn->query($sql)) {
			echo "Modification réussi";
		}
		else{
			echo "Error: " . $sql . mysqli_error($conn) . $idU.$r[0];
		}
?>