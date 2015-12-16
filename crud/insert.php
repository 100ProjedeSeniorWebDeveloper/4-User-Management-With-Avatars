<!DOCTYPE html>
<html>
<head>
	<title>Yeni Müşteri Ekle</title>
	<meta charset="utf-8">
</head>
<body>
<div >
	<form action="" method="post" enctype="multipart/form-data">
	<h2>Müsteri Ekle</h2>
		<table>
			<tr>
				<td>Ad:</td>
				<td><input type="text" name="ad"></td>
				<td>Soyad:</td>
				<td><input type="text" name="soyad"></td>
			</tr>
			<tr>
				<td>Tel No:</td>
				<td><input type="text" name="cep"></td>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
				
			</tr>
			<tr>
				<td>Not :</td>
				<td><textarea name="ek" cols="40" rows="8"></textarea></td>
			</tr>
			<tr>
				<td>Resim ekle:</td>
				<td><input type="FILE" name="image"></td>
							<td></td>
				<td><input type="submit" value="Kayıt Ekle"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>


<?php 

include "db.php";


if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["cep"]) && isset($_POST["email"]) && isset($_POST["ek"]) && isset($_FILES["image"]["name"]))	{
		$ad=$_POST["ad"];
		$soyad=$_POST["soyad"];
		$cep=$_POST["cep"];
		$email=$_POST["email"];
		$ek=$_POST["ek"];
		

	include ("upload.php");

		if($ad!='' && $soyad!=''){
$query = $db->prepare('INSERT INTO kullanici_bilgileri (ad, soyad, email, cep, ek,image_80_80, image_200_200,image_300_300) values( ?, ?, ?, ?, ?, ?, ?, ?)');
$query->execute(array($ad, $soyad, $email, $cep, $ek,$name_80_80,$name_200_200,$name_300_300));


				if($query)
					header("location:index.php");
		}
	}

 ?>