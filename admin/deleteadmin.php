<?php 
session_start();
 if(@!$_SESSION['admin']){
        header("Location:../index.php");

}
	$idadmin=$_SESSION['admin'];
	include('../conexion.php');

	$ide = $_GET['id_admin'];
	$consulta = "SELECT * FROM admin ";


	$result  = mysqli_query($link,$consulta);
$rowcount = mysqli_num_rows( $result );

	if( $rowcount == 1){

		echo ' <script
				language="javascript">alert("Lo sentimos no puedes eliminar un administrador, puede que estes en inicio de sesión o solo quede un administrador"); </script>
				';
			header("Location:regadmin.php");
		
	
}else{
	$sql = "DELETE FROM admin WHERE id_admin = '$ide'"; 

	

}
$query=mysqli_query($link,$sql);

if($query){
	header("Location: regadmin.php");
	
}


?>