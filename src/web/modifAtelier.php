<?php
/*

Permet la modification d'un atelier en rentrant les différentes informations
parametre example: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
*/
include 'config.php';

$nom = "testM";
$theme = "testM";
$type = "testM";
$discipline = "testM";
$public = "10110001";
$duree = 2;
$capacite=200;
$animateur ="QuentinM, ValentinM, Berenice";
$adresse= "testM";
$ville= "testM";
$codeP =33600;
$zone ="A";
$creneaux = "01230";
$resume = "test";

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