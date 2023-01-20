<?php 

	session_start();
	include('conexion.php');
	$user = $_SESSION['user'];

	//$id = $_SESSION['ID'];
	$cantidad = $_POST['ran'];
		

	$cons = mysqli_query($link,"SELECT id_usuario FROM usuario WHERE usuario = '$user'");
	$fila=mysqli_fetch_array($cons);

	$id_user = $fila[0];

	//$date = Date('d-m-y');
	if($cantidad >= 1){

	$res = "INSERT INTO pedido(id_pedido,cantidad,fecha,id_usuario, id_producto) VALUES (NULL,'$cantidad' ,CURDATE(),'$id_user','2')";
}else{
	header("Location:form.php");
}


	$query = mysqli_query($link, $res);

	if($query){
		header("Location:form.php");
	}else{}

?>