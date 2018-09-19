<?php
$namaserver="localhost";
$user="root";
$password="";
$db_name="ta_db";

$conn = mysqli_connect($namaserver,$user,$password,$db_name);

if(!$conn){
	echo "Error:" . mysqli_connect_error();
}else{
	echo "";
}
?>