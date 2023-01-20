<?php 
$usuario = $_POST['user'];
require("conexion.php");
$res = mysqli_query($link,"SELECT * FROM usuario WHERE usuario = '$usuario'");
$check = mysqli_num_rows($res);
if($check > 0 ){
        session_start();
		$query = mysqli_query($link,"SELECT * FROM usuario WHERE usuario = '$usuario'");
		if($row = mysqli_fetch_array($query)){
			$_SESSION['ID'] = $row['id_usuario'];
			$_SESSION['user'] = $row['usuario'];
		
			header("Location:form.php"); 
		}else{
			header("Location: index.php");	
		}

}else{
	mysqli_query($link,"INSERT INTO usuario VALUES(NULL,'$usuario')");
	session_start();
    $query2 = mysqli_query($link,"SELECT * FROM usuario WHERE usuario = '$usuario'");


	if($row2 = mysqli_fetch_array($query2)){

		$_SESSION["ID"] = $row2['id_usuario'];
		$_SESSION["user"] = $row2['usuario'];

		header("Location: form.php");
	}else{
		header("Location: index.php");
	}
}
?>