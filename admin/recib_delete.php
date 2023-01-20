<?php
include('../conexion.php');
$idRegistros = $_REQUEST['id'];

$sql = ("DELETE FROM pedido WHERE id_pedido= '".$idRegistros."' ");
mysqli_query($link, $sql);

$sql2 = ("DELETE FROM registro WHERE id_pedido= '".$idRegistros."' ");
mysqli_query($link, $sql2);


if($sql && $sql2){
	header("Location: admin.php");
}
?>