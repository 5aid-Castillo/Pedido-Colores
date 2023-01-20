<?php 
session_start();
    if(@!$_SESSION['admin']){
        header("Location:../index.php");

    }

include ("../conexion.php");
$id_reg = $_POST['id_reg'];
$metros = $_POST['metros'];
$id = $_GET['id'];

$sql = "UPDATE registro SET cantidad = '$metros' WHERE id_registro = '$id_reg'";
mysqli_query($link, $sql);

$sql2 = mysqli_query($link,"SELECT id_pedido FROM registro WHERE id_registro= '$id'");
$fila = mysqli_fetch_array($sql2);
$id_ped = $fila['id_pedido'];

 $consulta="SELECT SUM(cantidad) as TotalCol FROM registro WHERE id_pedido = '$id_ped'";
$resultado=$link -> query($consulta);
$filax=$resultado->fetch_assoc(); 

$total=$filax['TotalCol'];   

$non =  "UPDATE pedido SET total = '$total' WHERE id_pedido = '$id_ped'";
mysqli_query($link, $non);





if($sql){
    header("Location:registros.php?id_pedido=$id_ped");

}

?>