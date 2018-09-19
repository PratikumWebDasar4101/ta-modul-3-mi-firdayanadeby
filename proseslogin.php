<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "administrator" && $password =="123"){
$_SESSION["username"] = $username;
header("Location: formulir.php");
}else{
echo"Gagal Login";
}
?>