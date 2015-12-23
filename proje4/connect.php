<?php


  function sql($sql,$args = [])
  {
  	try{
 $db= new PDO("mysql:host=localhost;dbname=proje4","root","");
}
  catch(PDOexception $e){
  print $e->getMessage();
  }
  	$query = $db -> prepare ($sql );	
	 $status = $query -> execute ($args);
	return $query->fetchAll();
  }

function sentData(){

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$notlar=$_POST['notlar'];

        include("upload.php");
		
		return sql('INSERT INTO proje4 ( ad, soyad, tel, email, notlar, image_80_80, image_200_200, image_300_300) VALUES (?,?,?,?,?,?,?,?);',[$ad, $soyad, $tel, $email, $notlar,$name_80_80,$name_200_200,$name_300_300]);
	
}

function getData(){
	try {
		return $data=sql('SELECT  * from  proje4');
		
	} catch (Exception $e) {
		
		echo $e;
	}
}
function updateData($id){

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$notlar=$_POST['notlar'];

include("upload.php");

	try {
		sql("UPDATE `proje4` SET `id`=?,`ad`=?,`soyad`=?,`tel`=?,`email`=?],`notlar`=?,`image_80_80`=?,`image_200_200`=?,`image_300_300`=?",[$id]);
		
	} catch (Exception $e) {
		
		echo $e;		
	}
}
function deleteData($i){
	try {
		sql(" DELETE FROM `proje4`  WHERE id=? ",[$i]);
		
		
	} catch (Exception $e) {
		echo $e;
		
	}
}
function searchId($id){
	
	return sql(" SELECT * FROM  proje4 WHERE ad LIKE ? or soyad LIKE ? or tel LIKE ? or email LIKE ? or notlar LIKE ? ",[$id]);
}