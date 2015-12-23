<meta charset="utf-8">
<?php
include("connect.php");

$id=$_GET['id'];


if(isset($_POST["GÜNCELLE"])){

updateData($id);

header("location:index.php");
}


$users=getData();

	foreach($users as $row)
	{
		?>
		<form action="index.php" method="POST" enctype="multipart/form-data">
  	<h1 style="color:gray; ">Müşteri Ekle </h1>
    <table >
    	<tr>
    		<td><img src="<?=$row['image_200_200']; ?>" alt=""></td>
    	</tr>
      <tr>
        <td><input type="text" style="padding:5px; " name="ad" id="ad" value="<?=$row['ad'];?>" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="soyad" id="soyad" value="<?=$row['soyad'];?>" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="tel" id="tel" value="<?=$row['tel'];?>" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="email" id="email" value="<?=$row['email'];?>" required></td>
      </tr>
      <tr>
        <td><input type="textarea" style="padding:5px;" name="notlar" id="not" value="<?=$row['notlar'];?>" required></td>
      </tr>
      <tr>
          <td><input type="FILE" name="image" style="padding:5px;" /></td>
      </tr>
      <tr>
        
        <td><input type="submit"  style="padding:15px; background:lightgray; color:white; font-weight:bold; " value="UPDATE"></td>
      </tr>
    </table>
  </form>
		<?php
	}
