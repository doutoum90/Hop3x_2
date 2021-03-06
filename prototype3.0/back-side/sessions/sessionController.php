<?php

function createSession($user_id,$name){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "INSERT INTO `session` (
		`user_id`,
		`name`
	)
	VALUES (
		'".$user_id."',
		'".$name."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		return $conn->lastInsertId();
	}
	else{
		return -1;
	}
	$conn=null;
}
function getSession(){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getSessionByUser($user_id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `session` WHERE `user_id` = ".$user_id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getSessionbyId($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `session` WHERE `id` =".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateSession($id,$user_id,$name){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="UPDATE `session` SET `id` = '".$id."' ,`user_id` = '".$user_id."' ,`name` = '".$name."' WHERE id=".$id;
	$statement = $conn->query($requete);	
	if($statement == TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}
function deleteSession($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="DELETE FROM `session` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}

function getNameSessionById($id)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);

	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id" => $row['id'], "name" => $row['name']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}

	$result = "";
	foreach($retour as $key => $value) 
	{
		if ($value['id'] == $id)
		{
			$result = $value['name'];
		}
	}

	$conn = null;
	return($result);
}

 function getIdSessionByName ($name)
 {
 	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id" => $row['id'], "name" => $row['name']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}
	$result = "";
	foreach($retour as $key => $value) 
	{
		if ($value['name'] == $name)
		{
			$result = $value['id'];
		}
	}

	$conn = null;
	return($result);
 }
?>
