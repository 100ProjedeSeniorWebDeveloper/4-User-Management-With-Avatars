<?php
include("connect.php");
if(isset($_GET["id"]))
	$id=$_GET["id"];
		
		$musteri=getData();
		foreach ($musteri as $row){
			$sil1=$row["image_80_80"];
			$sil2=$row["image_200_200"];
			$sil3=$row["image_300_300"];
		}

		$musteri=deleteData($id);
		if($musteri){
			unlink($sil1);
			unlink($sil2);
			unlink($sil3);
			header("location:index.php");
		}
		else
		{
			echo"Silinemedi";
			header("location:index.php");
		}