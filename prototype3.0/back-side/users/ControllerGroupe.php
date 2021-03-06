<?php
//tous les fonctions pour travail avec le tablo "groupes"

function createGroup($nom){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "INSERT INTO `groupes` (
		`nom`
	)
	VALUES (
		'".$nom."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}

function getGroup(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `groupes` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"nom" => $row['nom']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function updateGroup($id,$id,$nom){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete ="UPDATE `groupes` SET `id` = '".$id."' ,`nom` = '".$nom."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}

function deleteGroup($id){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete ="DELETE FROM `groupes` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}

function getIdGroupByNom($nom){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$group_id = -1;
	$groups = getGroup();
	if(count($groups)>0){
		foreach($groups as $group =>$key){
			if($key['nom'] == $nom){
				$group_id = $key['id'];
			}
		}
	}
		return($group_id);
}

function getGroupName(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT `nom` FROM  `groupes` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("nom" => $row['nom']);
		array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getGroupNameById($id_group)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `groupes` ";

	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id" => $row['id'], "nom" => $row['nom']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}

	$result = "";
	foreach($retour as $key => $value) {
		if ($value['id'] == $id_group)
		{
			$result = $value['nom'];
		}
	}

	$conn = null;
	return($result);
}
?>