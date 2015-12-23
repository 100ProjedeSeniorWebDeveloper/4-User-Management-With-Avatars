<div align="center">
  <form action="index.php" method="POST" enctype="multipart/form-data">
  <h1 style="color:gray; ">Müşteri Ekle </h1>
    <table >
      <tr>
        <td><input type="text" style="padding:5px; " name="ad" id="ad" placeholder="AD" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="soyad" id="soyad" placeholder="SOYAD" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="tel" id="tel" placeholder="TELEFON" required></td>
      </tr>
      <tr>
        <td><input type="text" style="padding:5px;" name="email" id="email" placeholder="EPOSTA" required></td>
      </tr>
      <tr>
        <td><input type="textarea" style="padding:5px;" name="notlar" id="not" placeholder="NOT" required></td>
      </tr>
      <tr>
          <td><input type="FILE" name="image" style="padding:5px;" /></td>
      </tr>
      <tr>
        
        <td><input type="submit" name="button"  style="padding:15px; background:lightgray ; color:white; font-weight:bold; " value="Gönder"></td>
      </tr>
    </table>
  </form>
</div>
<?php
if(isset($_POST["button"])){

sentData();
header("location:index.php");
}
