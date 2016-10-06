<?php
/*

Permet la creation d'un atelier en rentrant les différentes informations
parametre example: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
*/
include 'config.php';

echo("<head>");
echo("<title>Ajout d'Atelier</title>");
echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>");
echo("</head>");


$nom = $_POST['titre'];
$theme = $_POST['theme'];
$type = $_POST['type'];
$discipline = $_POST['disciplines'];
$public = "00110001";
$duree = 1;
$capacite=20;
$animateur =$_POST['laboratoire'];
$adresse= $_POST['adresse'];
$ville= $_POST['ville'];
$codeP =33600;
$zone =$_POST['zone'];
$creneaux = "01230";
$resume = $_POST['resume'];

$sql = "INSERT INTO `cdpm2`.`ateliers` (`id`, `nom`, `theme`, `type`, `discipline`, `public`, `duree`, 
										`capacite`,`animateur`,`adresse`, `ville`, `codePostal`, `zone`, 
										`creneaux`, `resume`) 
		VALUES (NULL, '$nom', '$theme', '$type', '$discipline', '$public','$duree','$capacite',
				'$animateur','$adresse','$ville','$codeP','$zone','$creneaux','$resume');";
		if ($res=$conn->query($sql)) {
			echo "Création réussi";
		}
		else{
			echo "Error: " . $sql . mysqli_error($conn) . $idU.$r[0];
		}
?>