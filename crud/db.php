<?php
////////////// Veritabanına bağlanmayı sağlayan sorgu ////
try{
$db= new PDO("mysql:host=localhost;dbname=crud","root","");
}
catch (PDOexception $e){
print $e->getMessage();
}
?>