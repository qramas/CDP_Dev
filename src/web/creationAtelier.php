<?php
/*

Permet la creation d'un atelier en rentrant les différentes informations
parametre exemple: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
*/
include 'config.php';
$id= 1;
$nom = "test";
$theme = "test";
$type = "test";
$discipline = "test";
$public = "00110001";
$duree = 1;
$capacite=20;
$animateur ="Quentin, Valentin, Berenice";
$adresse= "test";
$ville= "test";
$codeP =33600;
$zone ="A";
$creneaux = "01230";
$resume = "test";

$sql = "INSERT INTO `cdpm2`.`ateliers` (`id`, `nom`, `theme`, `type`, `discipline`, `public`, `duree`, 
										`capacite`,`animateur`,`adresse`, `ville`, `codePostal`, `zone`, 
										`creneaux`, `resume`) 
		VALUES ('$id', '$nom', '$theme', '$type', '$discipline', '$public','$duree','$capacite',
				'$animateur','$adresse','$ville','$codeP','$zone','$creneaux','$resume');";
		if ($res=$conn->query($sql)) {
			echo "Création réussi";
		}
		else{
			echo "Error: " . $sql . mysqli_error($conn) . $idU.$r[0];
		}
?>