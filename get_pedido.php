<?php 
 
 error_reporting(0);
 session_start();
 include ('conexion.php');

$user = $_SESSION['user'];

      $c1 = $_POST['color1']; $m1 = $_POST['canti'];
      $c2 = $_POST['color2']; $m2 = $_POST['canti2'];
      $c3 = $_POST['color3']; $m3 = $_POST['canti3'];
      $c4 = $_POST['color4']; $m4 = $_POST['canti4'];
      $c5 = $_POST['color5']; $m5 = $_POST['canti5'];
      $c6 = $_POST['color6']; $m6 = $_POST['canti6'];
      $c7 = $_POST['color7']; $m7 = $_POST['canti7'];
      $c8 = $_POST['color8']; $m8 = $_POST['canti8'];
      $c9 = $_POST['color9']; $m9 = $_POST['canti9'];
      $c10 = $_POST['color10']; $m10 = $_POST['canti10'];
      $c11 = $_POST['color11']; $m11 = $_POST['canti11'];
      $c12 = $_POST['color12']; $m12 = $_POST['canti12'];
      $c13 = $_POST['color13']; $m13 = $_POST['canti13'];
      $c14 = $_POST['color14']; $m14 = $_POST['canti14'];
      $c15 = $_POST['color15']; $m15 = $_POST['canti15'];
      $c16 = $_POST['color16']; $m16 = $_POST['canti16'];
      $c17 = $_POST['color17']; $m17 = $_POST['canti17'];
      $c18 = $_POST['color18']; $m18 = $_POST['canti18'];
      $c19 = $_POST['color19']; $m19 = $_POST['canti19'];
      $c20 = $_POST['color20']; $m20 = $_POST['canti20'];
      $c21 = $_POST['color21']; $m21 = $_POST['canti21'];
      $c22 = $_POST['color22']; $m22 = $_POST['canti22'];
      $c23 = $_POST['color23']; $m23 = $_POST['canti23'];
      $c24 = $_POST['color24']; $m24 = $_POST['canti24'];
      $c25 = $_POST['color25']; $m25 = $_POST['canti25'];
      $c26 = $_POST['color26']; $m26 = $_POST['canti26'];
      $c27 = $_POST['color27']; $m27 = $_POST['canti27'];
      $c28 = $_POST['color28']; $m28 = $_POST['canti28'];
      $c29 = $_POST['color29']; $m29 = $_POST['canti29'];
      $c30 = $_POST['color30']; $m30 = $_POST['canti30'];
      $c31 = $_POST['color31']; $m31 = $_POST['canti31'];
      $c32 = $_POST['color32']; $m32 = $_POST['canti32'];
      $c33 = $_POST['color33']; $m33 = $_POST['canti33'];
      $c34 = $_POST['color34']; $m34 = $_POST['canti34'];
    
$total = $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 + $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20 + $m21 + $m22 + $m23 + $m24 + $m25 + $m26 + $m27 + $m28 + $m29 + $m30 + $m31 + $m32 + $m33 + $m34;


$query = mysqli_query($link,"SELECT id_usuario FROM usuario WHERE usuario='$user'");
$row=mysqli_fetch_array($query);
$id_user = $row[0];


$pedido = $link ->query("INSERT INTO pedido(id_pedido,id_usuario,fecha,total) VALUES(NULL,$id_user,CURDATE(),'$total')") or die($link ->error);


//$id_pedido=mysqli_insert_id($link);
$id_pedido= $link ->insert_id;
//$id_pedido = mysqli_insert_id($link);
if($c1 && $m1){
      
      
      $a1 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c1','$m1','$id_user','$id_pedido')") or die($link ->error);
}
if($c2 && $m2){
      
      $a2 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c2','$m2','$id_user','$id_pedido')") or die($link ->error);       
}
if($c3 && $m3){
      
      
      $a3 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c3','$m3','$id_user','$id_pedido')") or die($link ->error);
}
if($c4 && $m4){
      
      $a4 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c4','$m4','$id_user','$id_pedido')") or die($link ->error);       
}
if($c5 && $m5){
      
      
      $a5 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c5','$m5','$id_user','$id_pedido')") or die($link ->error);
}
if($c6 && $m6){
      
      $a6 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c6','$m6','$id_user','$id_pedido')") or die($link ->error);       
}
if($c7 && $m7){
      
      $a7 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c7','$m7','$id_user','$id_pedido')") or die($link ->error);       
}
if($c8 && $m8){
      
      $a8 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c8','$m8','$id_user','$id_pedido')") or die($link ->error);       
}
if($c9 && $m9){
      
      $a9 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c9','$m9','$id_user','$id_pedido')") or die($link ->error);       
}
if($c10 && $m10){
      
      $a10 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c10','$m10','$id_user','$id_pedido')") or die($link ->error);       
}
if($c11 && $m11){
      
      $a11 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c11','$m11','$id_user','$id_pedido')") or die($link ->error);       
}
if($c12 && $m12){
      
      $a12 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c12','$m12','$id_user','$id_pedido')") or die($link ->error);       
}
if($c13 && $m13){
      
      $a13 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c13','$m13','$id_user','$id_pedido')") or die($link ->error);       
}
if($c14 && $m14){
      
      $a14 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c14','$m14','$id_user','$id_pedido')") or die($link ->error);       
}
if($c15 && $m15){
      
      $a15 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c15','$m15','$id_user','$id_pedido')") or die($link ->error);       
}
if($c16 && $m16){
      
      $a16 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c16','$m16','$id_user','$id_pedido')") or die($link ->error);       
}
if($c17 && $m17){
      
      $a17 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c17','$m17','$id_user','$id_pedido')") or die($link ->error);       
}
if($c18 && $m18){
      
      $a18 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c18','$m18','$id_user','$id_pedido')") or die($link ->error);       
}
if($c19 && $m19){
      
      $a19 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c19','$m19','$id_user','$id_pedido')") or die($link ->error);       
}
if($c20 && $m20){
      
      $a20 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c20','$m20','$id_user','$id_pedido')") or die($link ->error);       
}
if($c21 && $m21){
      
      $a21 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c21','$m21','$id_user','$id_pedido')") or die($link ->error);       
}
if($c22 && $m22){
      
      $a22 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c22','$m22','$id_user','$id_pedido')") or die($link ->error);       
}
if($c23 && $m23){
      
      $a23 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c23','$m23','$id_user','$id_pedido')") or die($link ->error);       
}
if($c24 && $m24){
      
      $a24 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c24','$m24','$id_user','$id_pedido')") or die($link ->error);       
}
if($c25 && $m25){
      
      $a25 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c25','$m25','$id_user','$id_pedido')") or die($link ->error);       
}
if($c26 && $m26){
      
      $a26 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c26','$m26','$id_user','$id_pedido')") or die($link ->error);       
}
if($c27 && $m27){
      
      $a27 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c27','$m27','$id_user','$id_pedido')") or die($link ->error);       
}
if($c28 && $m28){
      
      $a28 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c28','$m28','$id_user','$id_pedido')") or die($link ->error);       
}
if($c29 && $m29){
      
      $a29 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c29','$m29','$id_user','$id_pedido')") or die($link ->error);       
}
if($c30 && $m30){
      
      $a30 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c30','$m30','$id_user','$id_pedido')") or die($link ->error);       
}
if($c31 && $m31){
      
      $a31 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c31','$m31','$id_user','$id_pedido')") or die($link ->error);       
}
if($c32 && $m32){
      
      $a32 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c32','$m32','$id_user','$id_pedido')") or die($link ->error);       
}
if($c33 && $m33){
      
      $a33 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c33','$m33','$id_user','$id_pedido')") or die($link ->error);       
}
if($c34 && $m34){
      
      $a34 = $link ->query("INSERT INTO registro(id_registro,color,cantidad,id_usuario,id_pedido) VALUES (NULL,'$c34','$m34','$id_user','$id_pedido')") or die($link ->error);       
}

if($a1 || $a2 || $a3 || $a4 || $a5 || $a6 || $a7  || $a8 || $a9 || $a10 || $a11 || $a12 || $a13 || $a14 || $a15 || $a16 || $a17 || $a18 || $a19 || $a20 || $a21 || $a22 || $a23 || $a24 || $a25 || $a26 || $a27 || $a28 || $a29 || $a30 || $a31 || $a32 || $a33 || $a34){
    
    require('admin/fpdf/fpdf.php');
//HEAD.
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,20,'                                Detalles del Pedido',0,1);
/*Conexion y consulta */
include('conexion.php');

/*USUARIO */
$consulta =  mysqli_query($link,"SELECT usuario FROM usuario INNER JOIN registro ON usuario.id_usuario = registro.id_usuario WHERE registro.id_pedido = $id_pedido ");
$fila = mysqli_fetch_array($consulta);
$usuario = $fila['usuario'];
$pdf->Cell(1,20,'Usuario:  '.$usuario.'',0,1);
/* =============================================== */
//Thead.
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,' __________________________________________________________',0,1);
$pdf->Cell(0,10,'            COLOR                                      METROS',0,1);
$pdf->Cell(0,10,' __________________________________________________________',0,1);
/* ============================================================= */
//Tbody.

$consulta2= mysqli_query($link,"SELECT * FROM registro WHERE id_pedido = $id_pedido");
            while($fila2 = mysqli_fetch_array($consulta2)){ 
     
        /*      
$pdf->Cell(0,10,'           '.$fila2['color'].'                                     '.$fila2['cantidad'].'',0,1);
*/

$pdf->Cell(0,10,''.$fila2['color'].'',0,1);

$pdf->Cell(0,-4,'                                                                       '.$fila2['cantidad']. '',0,1);
$pdf->Cell(0,5,' __________________________________________________________',0,1);

}
/* ============================================================= */
//Thead2.

$cant = mysqli_query($link,"SELECT total FROM pedido WHERE id_pedido = $id_pedido");              
$filax = mysqli_fetch_array($cant);
$totalx = $filax['total'];
//Muestra total.
$pdf->Cell(0,10,'Cantidad total del pedido: '.$totalx.'',0,1);

$pdf->Output('','D');
    
    
    
   header("Location:form.php#m-success");
   
   
   
}



?> 
