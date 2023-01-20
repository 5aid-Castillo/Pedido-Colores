<?php 
require('fpdf/fpdf.php');
//HEAD.
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,20,'                                Detalles del Pedido',0,1);
/*Conexion y consulta */
include('../conexion.php');
$id_pedido = $_GET['id_pedido'];
/*USUARIO */
$query =  mysqli_query($link,"SELECT usuario FROM usuario INNER JOIN registro ON usuario.id_usuario = registro.id_usuario WHERE registro.id_pedido = $id_pedido ");
$row = mysqli_fetch_array($query);
$user = $row['usuario'];
$pdf->Cell(1,20,'Usuario:  '.$user.'',0,1);
/* =============================================== */
//Thead.
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,' __________________________________________________________',0,1);
$pdf->Cell(0,10,'            COLOR                                      METROS',0,1);
$pdf->Cell(0,10,' __________________________________________________________',0,1);
/* ============================================================= */
//Tbody.

$query2= mysqli_query($link,"SELECT * FROM registro WHERE id_pedido = $id_pedido");
            while($row2 = mysqli_fetch_array($query2)){ 
     
        /*      
$pdf->Cell(0,10,'           '.$row2['color'].'                                     '.$row2['cantidad'].'',0,1);
*/

$pdf->Cell(0,10,''.$row2['color'].'',0,1);

$pdf->Cell(0,-4,'                                                                       '.$row2['cantidad']. '',0,1);
$pdf->Cell(0,5,' __________________________________________________________',0,1);

}
/* ============================================================= */
//Thead2.

$cant = mysqli_query($link,"SELECT total FROM pedido WHERE id_pedido = $id_pedido");              
$fila = mysqli_fetch_array($cant);
$total = $fila['total'];
//Muestra total.
$pdf->Cell(0,10,'Cantidad total del pedido: '.$total.'',0,1);

$pdf->Output('','D');
?>

