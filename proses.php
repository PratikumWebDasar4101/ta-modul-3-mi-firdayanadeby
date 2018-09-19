<?php
include "koneksi.php";

$nama=$_POST['nama'];
$nim = $_POST['nim'];
$fakultas=$_POST['fakultas'];
$jeniskelamin=$_POST['jenkel'];

$dir = "gambar/";
$nama_file= $_FILES["File_gbr"]['name'];
$nama_file_tmp = $_FILES["File_gbr"]['tmp_name'];
$target = $dir . $nama_file;

$sql = "INSERT INTO tb_ta VALUES('$nim','$nama','$fakultas','$jenkel','$nama_file')";

if(mysqli_query($conn,$sql)and move_uploaded_file($nama_file_tmp, $target)){
echo "Telah Berhasil Upload";
echo "<a href='hasil.php'>Lihat Data</a>";
}else{
echo"Ggagal Upload";
}
?>
