<?php include 'baglantı.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>guncelle</title>
<style>

		#res{
		margin-top: -9px;
		padding-bottom: 15px;
		margin-left: 35px;
		}
		#arama{
			width: 300px;
		}
		#bar{
			background-color: #283E4A;
		}	
		#icon{
			color: white;
		}
		#mavi{
			color: #0073B1;
			font-size: 15px;
		}
		#resim{
			width: 100px;
			height: 130px;
		}
		#tepe{
			padding-left: 0px;
			width: 1320px;
		}
		#box{
			border:3px;
		}
		#yazi{
			margin-left: 25px;
			font-family: arial;
			font-size: 30px;
			border-bottom: 2px solid #e5e5e5;
		}
		#yazi1{
			margin-top: 5px;
			font-family: arial;
			font-size: 20px;
		}
		#textbox{
			margin-left: 23px;
		}
		#arama{
			width: 300px;
			margin-top: 5px;
		}
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="tepe" class="container-fluid">
	<header>	
		<nav class="navbar navbar-default">
	    			<div class="navbar-header">
	      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        				<span class="sr-only">Toggle navigation</span>
	       					<span class="icon-bar"></span>
	        				<span class="icon-bar"></span>
	        				<span class="icon-bar"></span>
	      				</button>
	      				<a id="res" class="navbar-brand" href="#"><img src="https://vignette.wikia.nocookie.net/the-most-popular-girls-in-school/images/1/1a/Linkedin.png/revision/latest?cb=20150730204727" width="35px" height="35px" alt=""></a>
	    			</div>
				    <div id="bar" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  					
				      	<ul class="nav navbar-nav navbar-right">
				       		<li> <a id="icon" href="https://localhost/proje/inde.php">Listele</a></li>
				         	<li> <a id="icon" href="https://localhost/proje/ekle.php">Ekle</a></li>
				      	</ul>
				    </div>
			<div class="row">
				<div class="container">
					<div id="yazi">GUNCELLE</div>
						<div class="col-md-4">
							<div id="yazi1">AD : </div>
							<div id="yazi1">SOYAD :</div>
							<div id="yazi1">CEP : </div>
							<div id="yazi1">E-MAİL :</div>
							<div id="yazi1">NOT : </div>
						</div>
						<div class="col-md-4">
							<form method="POST" enctype="multipart/form-data">
							<input id="arama" type="text" name="ad1" >
							<input id="arama" type="text" name="soyad1">
							<input id="arama" type="text" name="cep1" >
							<input id="arama" type="text" name="mail1">
							<input id="arama" type="text" name="not1">
							<input type="file" name="user_image"><br>
							<div><input type="submit" name="ekle" value="ekle"></div>
							<?php 
							if($_GET['id']=="")
								{
									header("location:inde.php");
								} 
							else
								{
								 $id1=$_GET['id'];
								 	if(isset($_FILES["user_image"]))
	            						{
					            			$imgFile = $_FILES["user_image"]["name"];
					            			$tmp_dir = $_FILES["user_image"]["tmp_name"];
					            			$imgSize = $_FILES["user_image"]["size"];
				            			 if(empty($imgFile))
				            			 	{
											   $errMSG = "Please Select Image File.";
											}
										else
											{
												$upload_dir = 'user_images/';
												$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
												$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
												$userpic = rand(1000,1000000).".".$imgExt;
											 if(in_array($imgExt, $valid_extensions))
											 	{  
											 	if($imgSize < 5000000)  
												 	{
												     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
												    }
											    else
												    {
												     $errMSG = "Sorry, your file is too large.";
												     echo "hatalı";
												    }
									    		}
											else
											    {
											    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
											    }
											}
								if(!isset($errMSG))
									{
								     if (
									isset($_POST['ad1']) && 
									isset($_POST['soyad1']) && 
									isset($_POST['cep1']) && 
									isset($_POST['mail1']) && 
									isset($_POST['not1']) 
										) 
									   	{	
											$ad= $_POST["ad1"];
											$soyad = $_POST["soyad1"];
											$cep =$_POST["cep1"];
											$mail =$_POST["mail1"];
											$not=$_POST["not1"];
											if ($ad=="" or $soyad=="" or $cep=="" or $mail=="" or $not=="" )
												{
													echo "lütfen bos birakmayiniz";
												}
											else
												{
														$v=$db->prepare("UPDATE `customers` SET `ad` = ?,`soyad` = ?, `cep` = ?, `mail` = ?, `not` = ? ,`PicName`= ? WHERE `customers`.`id` =?;" );
														$v->execute([$ad,$soyad,$cep,$mail,$not,$userpic,$id1]);
														header("location:inde.php");
												}	
		    							}	
									}
										}	
								}
							?>
							</form>
						</div>
				</div>
			</div>
</div>
		</nav>
	</header>
</div>
<footer>
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
  </div>
</footer>
	
</body>
</html>