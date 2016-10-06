<?php
/*

Permet la modification d'un atelier en rentrant les différentes informations
parametre example: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
*/
include 'config.php';

$sql =	"SELECT * FROM `ateliers`";
		if ($res=$conn->query($sql)) {
			while($donnees = $res->fetch_assoc()){
				$id[] = $donnees['id'];
				echo "nom : ".$donnees['nom']."<br>";
				echo "thème : ".$donnees['theme']."<br>";
				echo "type : ".$donnees['type']."<br>";
				echo "discipline : ".$donnees['discipline']."<br>";
				echo "public : ".$donnees['public']."<br>"; //Rajouter traitement par rapport à la chaine de carac
				echo "durée : ".$donnees['duree']."<br>";
				echo "capacité : ".$donnees['capacite']."<br>";
				echo "animateur : ".$donnees['animateur']."<br>";
				echo "adresse : ".$donnees['adresse']."<br>";
				echo "ville : ".$donnees['ville']."<br>";
				echo "code Postal : ".$donnees['codePostal']."<br>";
				echo "zone : ".$donnees['zone']."<br>";
				echo "creneaux : ".$donnees['creneaux']."<br>";  //Rajouter traitement par rapport à la chaine de carac
				echo "resumé : ".$donnees['resume']."<br> <br>";

			}
		}
		else{
			echo "Error: " . $sql . mysqli_error($conn) . $id.$r[0];
		}
?>