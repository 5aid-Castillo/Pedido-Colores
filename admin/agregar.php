<?php

session_start();
include('../conexion.php');
if(@!$_SESSION['admin']){
header("Location:../index.php");

    }

$nickname = $_POST['admin'];
$password = sha1($_POST['password']);


$res = "INSERT INTO admin(id_admin,usuario,password) VALUES (NULL,'$nickname' ,'$password')";



	$query = mysqli_query($link, $res);

	if($query){
		header("Location:regadmin.php");
	}else{}

?>



?>