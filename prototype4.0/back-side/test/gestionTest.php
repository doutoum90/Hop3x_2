<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/test/TestController.php");


	

	if(isset($_POST['ajouter'])){
		$code=$_POST['code'];
		$message=$_POST['message'];
		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
		$enonce_id=$_POST['enonce_id'];
		createTest($message,$code,$sessionUniversitaire_id);
	}

	if(isset($_POST['modifier'])){
		
	$test_id=$_GET['test_id'];
		$code=$_POST['code'];
		$message=$_POST['message'];
		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
		$enonce_id=$_POST['enonce_id'];
		updateTest($test_id,$message,$code);
	}



	//echo "id= ".$enonce_id."</br>";
	//echo "sessionUniversitaire_id".$sessionUniversitaire_id."</br>";
	
	header('Location: ../../views/test/listTest.php?enonce_id='.$enonce_id.'&sessionUniversitaire_id='.$sessionUniversitaire_id );

	
?>


<?php
	include("../../commons/commonEnd.php");
?>
