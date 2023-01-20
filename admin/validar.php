<?php 

session_start();
require('../conexion.php');

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);


$res = mysqli_query($link,"SELECT * FROM admin WHERE usuario = '$usuario'");
$row = mysqli_fetch_array($res);
	
	if($password == $row['password']){
			$_SESSION['admin'] = $row['usuario'];

			header('Location:admin.php');
		}
		else  
			
			header('Location:../index.php#m2-o');
	

?>