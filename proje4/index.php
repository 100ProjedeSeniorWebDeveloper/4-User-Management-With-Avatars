<?php
include("connect.php");
?>
    <script>
    function a(){
      
      return confirm("Silmek istediğinize emin misiniz?");}
    </script>
    
<a href="add.php" style="color:gray; float:right; font-size:20px;">Müşteri Eklemek için Tıklayın.</a> 

<div>
<form action="" method="post" name="formm">
  <table>
    <input type="text"  name="ara" style="padding:15px;" placeholder="Arama" />
    <input type="submit" style="padding:15px; background:lightgray; color:white; font-weight:bold;" value="Ara" />
  </table>
</form>
</div>



<?php 
    $data=getData();



    if(isset($_POST["ara"])){
      if(!empty($_POST["ara"])){
      $gelen=$_POST["ara"];  
        ?>
        <table>
        <h1 style="font-weight:bold;">ARAMA SONUCLARI</h1>
    <div>
      <table>
        <tr>
          <td>FOTOGRAF</td>
          <td>AD</td>
          <td>SOYAD</td>
          <td>TEL</td>
          <td>EMAİL</td>
          <td>NOT</td>
          <td>GÜNCELLE</td>
          <td>SİL</td>
        </tr>
   
      <?php 
        foreach ($data as $row) {
        ?>
        
    <tr>
        
      <td><?=$row["image_80_80"];?></td>
      <td><?=$row["ad"]; ?></td>
      <td><?=$row["soyad"]; ?></td>
      <td><?=$row["tel"]; ?></td>
      <td><?=$row["email"]; ?></td>
      <td><?=$row["notlar"]; ?></td>
      <td><a href="update.php?id=<?=$row["id"]; ?>"<button>Güncelle</button></td>
      <td><a href="delete.php?id=<?=$row["id"]; ?>"<button onclick=" return a()">SİL</button></td>
    </tr>
                
        <?php
      }
      ?>
    </table>
    <?php
    }
    else
    {
     echo("lütfen aranacak karakter giriniz!");
    }
  }
    else
    {
      $data=getData();
      if($users = $data){
    ?>
    <h1 style="font-weight:bold;">Veri Listeleme</h1>
    <div>
      <table>
        <tr>
        <td>FOTOGRAF</td>
          <td>AD</td>
          <td>SOYAD</td>
          <td>TEL</td>
          <td>EMAİL</td>
          <td>NOT</td>
          <td>GÜNCELLE</td>
          <td>SİL</td>
        </tr>
   <?php
   $data=getData();
   foreach ($data as $row) {
    ?>
    <tr>
    <td><?=$row["image_80_80"];?></td>
      <td><?=$row["ad"]; ?></td>
      <td><?=$row["soyad"]; ?></td>
      <td><?=$row["tel"]; ?></td>
      <td><?=$row["email"]; ?></td>
      <td><?=$row["notlar"]; ?></td>
      <td><a href="update.php?id=<?=$row['id']; ?>"<button>Güncelle</button></td>
      <td><a href="delete.php?id=<?=$row['id']; ?>"<button onclick=" return a()">SİL</button></td>
    </tr>
    <?php   
   }
   ?>
      </table>
    </div>
    <?php
    }
}