<?php 
//connection database
require_once "init.php";

if($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['phonenum'] && $_POST['note'] && isset($_FILES['photo'])){
	
	if (isUploadAnImage($_FILES['photo'])) {
		$uploadPath="photos";
		$extension=pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		$newName=uniqid().'.'.$extension;
		$destinationOfPhoto = $uploadPath.'/'.$newName;
		move_uploaded_file($_FILES['photo']['tmp_name'], $destinationOfPhoto);
	}

	//equal posted datas to variables 
	$name     = $_POST['name'];
	$surname  = $_POST['surname'];
	$phoneNum = $_POST['phonenum'];
	$email    = $_POST['email'];
	$note     = $_POST['note'];
	//$photo    = ??????????????;
		// in addQuery variable, preparing this variables for database 
	$addQuery = $connection->prepare("INSERT INTO table1 (name, surname, phonenum, email, note, photo) VALUES ( ?, ?, ?, ?, ?, ?)");
		//and add database
	$isAdded = $addQuery->execute(array($name, $surname, $phoneNum, $email, $note,$newName));
	if($isAdded){
		$image = new \Eventviva\ImageResize($destinationOfPhoto);
		$image
		    ->resizeToBestFit(125, 150)
		    ->save($uploadPath.'/thumbnails/'.$newName)

		    ->resizeToBestFit(375, 450)
		    ->save($uploadPath.'/popups/'.$newName)

		    ->resizeToBestFit(625, 750)
		    ->save($uploadPath.'/previews/'.$newName);
		header("Location: home.php");
	}else{

		$_SESSION['message']="Please,Did NOT add.";
		header("Location:home.php");
	}
}
else{

	$_SESSION['message']="Please,Do NOT leave blank form.";
	header("Location:home.php");
}