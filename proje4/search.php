<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<meta charset="utf-8">
	
<script>				
	    $(function(){
	    	$('.changable').mouseover(function  () {
						$(this).attr('src',$(this).data('image2'))
					})
					$('.changable').mouseleave(function  () {
						$(this).attr('src',$(this).data('image'));
					})
					
	    $('td img').click(function  () {
	    	$('.box img').attr('src',$(this).data('image3'));
	    	$('.box').show();
	    })
		
	});
</script>



</head>
<body>

</body>
</html>

<?php 
include("connect.php");

if(!empty($_POST["ara"]))
{
$search=searchId($id);
	if($search)
	{
		?>
				<table cellpadding="10" style="border:1px solid #ccc">
					<tr>
						<td style="border:1px solid #ccc"><div style="width:100px; color:red;">Resim</div></td>
						<td style="border:1px solid #ccc"><div style="width:100px; color:red;">Musteri Adi</div></td>
						<td style="border:1px solid #ccc"><div style="width:100px; color:red;">Soyadi</div></td>
						<td style="border:1px solid #ccc"><div style="width:150px; color:red;">Cep no</div></td>
						<td style="border:1px solid #ccc"><div style="width:150px; color:red;">E-mail</div></td>
						<td style="border:1px solid #ccc"><div style="width:610px; color:red;">not</div></td>
					</tr>
				</table>

<?php
		foreach ($search as $row) {
?>

			<table cellpadding="10" style="border:1px solid #ccc">
				
				<tr>
					<td><div class="bas" style="cursor:pointer;"><img class="changable" border="0" data-image="<?=$row["image_80_80"];?>" data-image2="<?=$row["image_200_200"];?>" data-image3="<?=$row["image_300_300"];?>"src="<?=$row["image_80_80"];?>"></div></td>
					<td style="border:1px solid #ccc"><div style="width:100px; word-wrap:break-word;"><?=$row["ad"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:100px; word-wrap:break-word;"><?=$row["soyad"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:150px; word-wrap:break-word;"><?=$row["tel"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:150px; max-height:50px;  word-wrap:break-word;"><?=$row["email"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:500px; max-height:50px; overflow:auto; word-wrap:break-word;"><?=$row["not"]; ?></div></td>
					<td style="border:1px solid #ccc"><a href='update.php?id=<?=$row["id"]; ?>'>Edit</a></td>
					<td style="border:1px solid #ccc"><a href='delete.php?id=<?=$row["id"]; ?>'>delete</a></td>
				</tr>

			</table>
	
<?php
		}
	}	
}

 ?>
 <div class="box" style="display:none">
		<div onclick="$(this).parent().hide();" class="kapat">X</div>
		<img border="0"   /> 	
	</div>
