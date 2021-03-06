<?php

function createFichier($projet_id,$nom,$language){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "INSERT INTO `fichier` (
		`projet_id`,
		`nom`,
		`language`
	)
	VALUES (
		'".$projet_id."',
		'".$nom."',
		'".$language."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function getFichier(){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `fichier` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"projet_id" => $row['projet_id'],"nom" => $row['nom'],"language" => $row['language']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getProjetByFile_id($file_id){

	$fichiers = getFichierByID($file_id);
	return($fichiers[0]["projet_id"]);
}

function getFichierByProjectID($projet_id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `fichier` WHERE `projet_id` = ".$projet_id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"projet_id" => $row['projet_id'],"nom" => $row['nom'],"language" => $row['language']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getFichierByID($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `fichier` WHERE `id` = ".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"projet_id" => $row['projet_id'],"nom" => $row['nom'],"language" => $row['language']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function updateFichier($id,$projet_id,$nom,$language){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="UPDATE `fichier` SET `projet_id` = '".$projet_id."' ,`nom` = '".$nom."' ,`language` = '".$language."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteFichier($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="DELETE FROM `fichier` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>
