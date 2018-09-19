<?php
include "koneksi.php";

$sql = "SELECT * FROM tb_ta";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
echo"<br>nama : ".$row["Nama_user"] . "<br>";
echo"nim : ".$row["Nim"] . "<br>";
echo"fakultas : ".$row["Fakultas"] . "<br>";
echo"gender : ".$row["Jenis_kelamin"] . "<br>";
echo"<img width='200px' src='gambar/" .$row["File_gbr"] ." '><br>";
}
}
?>