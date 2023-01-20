<?php
include('conexion.php');
session_start();
if(@!$_SESSION["user"]){header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <title>Pedido</title>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">


  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="style/main.css">
 
  <link rel="stylesheet" type="text/css" href="css/wrapper.css">


<!--===============================================================================================-->
</head>
<body>


  <div class="limiter">  
    <div class="container-login100">

      <div class="wrap-login100">
<span class="login100-form-title p-b-26">
Usuario: <strong style="color: darkblue;"><?php echo $_SESSION["user"];?></strong>
</span>
          
         <!--
          <div align="center" style="width:30%;"class="wrap-login100-form-btn">
              <div class="btn-salir"></div>

              <button onclick="location.href = 'salir.php'" style="background: #FA5882;font-size: 12px; height: 30px;"type="submit" name="salir" class="login100-form-btn">
                Salir
              </button>
            </div>-->
            <center>
                <a href="salir.php"><button style="font-size: 16px; height: 40px;"class="bn632-hover bn28">Salir</button></a>
                <style>.bn632-hover {
  width: 120px;
  font-size: 12px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 30px;
  text-align:center;
  border: none;
  background-size: 200% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn28 {
  background-image: linear-gradient(
    to right,
    #eb3941,
    #f15e64,
    #e14e53,
    #e2373f
  );
  box-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
}</style>
            </center>
            
            <br><br>

            <strong style="font-size: 20px;">INSTRUCCIONES</strong><hr><br>
          <strong style="font-size: 15px;">1. Da click sobre cada color que requiera para seleccionar los colores(cada click equivale a 1 metro). <br> 2. Para eliminar metros, selecciona primero la casilla de <strong style="color: red;">"Quitar Metros"</strong> y despu&eacute;s da click sobre los metros que quieras eliminar.<br>3. Asegurate de que la cantidad de metros seleccionados coinciden con tu pedido, ya que de ser m&aacute;s metros se eliminara el excedente al azar.<br>4. Una vez que est&eacute;s seguro de tu selecci&oacute;n da click en <strong style="color: green;">"Enviar Pedido"</strong>.<br>5. Recibiras en tu email un resumen de los colores seleccionados. </strong><br><hr>

<br><br>
<br>

<div class="container">
    <div class="button-wrap"><input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked" /><label class="button-label" for="yes-button">
            <h1>Agregar Metros</h1>
        </label><input  class="hidden radio-label" type="radio" name="accept-offers" id="no-button" /><label class="button-label" for="no-button">
            <h1>Quitar Metros</h1>
        </label></div>
</div>






<br><br>
<div class="contador"align="center>">
<center>
<span filter-content="T">Total</span>

<style> .contador span {

  position: relative;
  font-family: "Avenir Next", sans-serif;
  font-weight: 900;
  font-size: 20px;
  text-transform: uppercase;
  font-style: italic;
  letter-spacing: 0.05em;
  display: inline-block;
}
 </style>
 <input type="text" class="input_box" style="font-size: 20px;  align-text:center;border-radius: 5px;width: 8%;height: 30px;background:  #99eeb4; border: 2px solid #006991; color: #4B088A; font-weight: bold;" name="total_fee" id="total_fee" value="" disabled> <strong>METROS</strong>
</center>
            </div>
<style>input:disabled{color:white;opacity: 1 !important;}</style>
          
<br><br>



       <div class="dots-wrapper" align="center">




 <!--===============================================================================================-->              
          <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Ice Blue</strong></p>      
    <button onclick="aumentar(); "id="color-1" value="Ice Blue"align="center"class="dot"><input type="number"id="cantidad" name="cantidad"value=""style="margin-left: 3px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
         <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Sky Blue</strong></p>      
        <button onclick="aumentar2();"id="color-2" value="Skye Blue"align="center"class="dot"><input type="number"id="cantidad2" name="cantidad2"  value=""style="margin-left: 5px;background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px"disabled  class="input_box fee" onchange="findTotal();"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Brilliant Blue</strong></p>      
        <button onclick="aumentar3(); "id="color-3" value="Brilliant Blue"align="center"class="dot"><input type="number"id="cantidad3" name="cantidad3"value=""style="margin-leftt: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Dark Blue</strong></p>      
        <button onclick="aumentar4()"id="color-4" value="Dark Blue"align="center"class="dot"><input type="number"id="cantidad4" name="cantidad4"value=""style="margin-left: 1px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Steel Blue</strong></p>      
        <button onclick="aumentar5()"id="color-5" value="Steel Blue"align="center"class="dot"><input type="number"id="cantidad5" name="cantidad5"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Light Gray</strong></p>      
        <button onclick="aumentar6()"id="color-6" value="Light Gray"align="center"class="dot"><input type="number"id="cantidad6" name="cantidad6"value=""style="margin-left: 5px; background: transparent;color: #000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:20px; font-size: 10px"><strong>Gray</strong></p>      
        <button onclick="aumentar7()"id="color-7" value="Gray"align="center"class="dot"><input type="number"id="cantidad7" name="cantidad7"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Dark Gray</strong></p>      
        <button onclick="aumentar8()"id="color-8" value="Dark Gray"align="center"class="dot"><input type="number"id="cantidad8" name="cantidad8"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Yellow</strong></p>      
        <button onclick="aumentar9()"id="color-9" value="Yellow"align="center"class="dot"><input type="number"id="cantidad9" name="cantidad9"value=""style="margin-left: 5px; background: transparent;color: #000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 9px"><strong>Signal Yellow</strong></p>      
        <button onclick="aumentar10()"id="color-10" value="Signal Yellow"align="center"class="dot"><input type="number"id="cantidad10" name="cantidad10"value=""style="margin-left: 1px; background: transparent;color: #000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-left:5px; font-size: 9px"><strong>Pastel Orange</strong></p>      
        <button onclick="aumentar11()"id="color-11" value="Pastel Orange"align="center"class="dot"><input type="number"id="cantidad11" name="cantidad11"value=""style="margin-left: 2px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Orange</strong></p>      
        <button onclick="aumentar12()"id="color-12" value="Orange" align="center"class="dot"><input type="number"id="cantidad12" name="cantidad12"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Orange Red</strong></p>      
        <button onclick="aumentar13()"id="color-13" value="Orange Red"align="center"class="dot"><input type="number"id="cantidad13" name="cantidad13"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Red</strong></p>      
        <button onclick="aumentar14()"id="color-14" value="Red"align="center"class="dot"><input type="number"id="cantidad14" name="cantidad14"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Dark Red</strong></p>      
        <button onclick="aumentar15()"id="color-15" value="Dark Red"align="center"class="dot"><input type="number"id="cantidad15" name="cantidad15"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Cream</strong></p>      
        <button onclick="aumentar16()"id="color-16" value="Cream"align="center"class="dot"><input type="number"id="cantidad16" name="cantidad16"value=""style="margin-left: 5px; background: transparent;color: #000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  
<!--===============================================================================================-->
    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Mint</strong></p>      
        <button onclick="aumentar17()"id="color-17" value="Mint"align="center"class="dot"><input type="number"id="cantidad17" name="cantidad17"value=""style="margin-left: 5px; background: transparent;color:#000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Turquoise</strong></p>      
        <button onclick="aumentar18()"id="color-18" value="Turquoise"align="center"class="dot"><input type="number"id="cantidad18" name="cantidad18"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 9px"><strong>Lime Tree Green</strong></p>      
        <button onclick="aumentar19()"id="color-19" value="Lime Tree Green"align="center"class="dot"><input type="number"id="cantidad19" name="cantidad19"value=""style="margin-left: 2px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 9px"><strong>Yellow Green</strong></p>      
<button onclick="aumentar20()"id="color-20" value="Yellow Green" align="center"class="dot"><input type="number"id="cantidad20" name="cantidad20"value=""style="margin-left: 2px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Green</strong></p>      
        <button onclick="aumentar21()"id="color-21" value="Green"align="center"class="dot"><input type="number"id="cantidad21" name="cantidad21"value=""style="margin-left: 2px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 9px"><strong>Forest Green</strong></p>      
        <button onclick="aumentar22()"id="color-22" value="Forest Green"align="center"class="dot"><input type="number"id="cantidad22" name="cantidad22"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Silver Gray </strong></p>      
        <button onclick="aumentar23()"id="color-23" value="Silver Gray"align="center"class="dot"><input type="number"id="cantidad23" name="cantidad23"value=""style="margin-left: 5px; background: transparent;color: black;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>

<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Gold</strong></p>      
        <button onclick="aumentar24()"id="color-24" value="Gold"align="center"class="dot"><input type="number"id="cantidad24" name="cantidad24"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Lavender</strong></p>      
        <button onclick="aumentar25()"id="color-25" value="Lavender"align="center"class="dot"><input type="number"id="cantidad25" name="cantidad25"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Purple</strong></p>      
        <button onclick="aumentar26()"id="color-26" value="Purple"align="center"class="dot"><input type="number"id="cantidad26" name="cantidad26"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Soft Pink</strong></p>      
        <button onclick="aumentar27()"id="color-27" value="Soft Pink"align="center"class="dot"><input type="number"id="cantidad27" name="cantidad27"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Bright Pink</strong></p>
  <button onclick="aumentar28()"id="color-28" value="Bright Pink"align="center"class="dot"><input type="number"id="cantidad28" name="cantidad28"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Black</strong></p>      
        <button onclick="aumentar29()"id="color-29" value="Black"align="center"class="dot"><input type="number"id="cantidad29" name="cantidad29"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Matte White</strong></p>      
        <button onclick="aumentar30()"id="color-30" value="Matte White"align="center"class="dot"><input type="number"id="cantidad30" name="cantidad30"value=""style="margin-left: 5px; background: transparent;color: #000000;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
         

<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Matte Black</strong></p>      
        <button onclick="aumentar31()"id="color-31" value="Matte Black"align="center"class="dot"><input type="number"id="cantidad31" name="cantidad31"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Light Brown</strong></p>      
        <button onclick="aumentar32()"id="color-32" value="Light Brown"align="center"class="dot"><input type="number"id="cantidad32" name="cantidad32"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
<!--===============================================================================================-->
      <div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>Brown</strong></p>      
        <button onclick="aumentar33()"id="color-33" value="Brown"align="center"class="dot"><input type="number"id="cantidad33" name="cantidad33"value=""style="margin-left: 5px; background: transparent;color: white;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>
    
<!--===============================================================================================-->

    
<div align="center">  

    <div class="dots-box" align="center">
  <p style="margin-right:5px; font-size: 10px"><strong>White</strong></p>      
        <button onclick="aumentar34()"id="color-34" value="White"align="center"class="dot"><input type="number"id="cantidad34" name="cantidad34"value=""style="margin-left: 5px; background: transparent;color: black;visibility: hidden;width: 100%;font-weight: bold; font-size: 10px" disabled  onchange="findTotal();" class="input_box fee"></button>
    </div>
    </div>    
    
<!--===============================================================================================-->

</div> <!--Dots wrapper-->

<br><br>
          <strong style="font-size: 15px;"> Por favor confirma que tu pedido sea correcto, una vez confirmado no es posible realizar cambios.</strong><br>
  <br><br>    
  
<table align="center" style="width:100%;">
<tr>

  <td style="width: 40%;">
  <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
                     <a type="submit" name="submit" data-toggle="modal"  class="login100-form-btn" href="https://articulo.mercadolibre.com.mx/MLM-843537462-20-mt-vinil-de-30cm-para-cameo-silhouette-varios-colores-_JM" >
                <strong>R</strong><strong style="text-transform: lowercase;">egresar</strong> </a>
            </div>
          </div>
</td> <td></td>
  <td style="width: 50%;">
   <div class="container-login100-form-btn">
        <!--    <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>

    
              <a style="background: seagreen; border-radius: 5px;"type="submit" name="submit" data-toggle="modal" onclick="insertarPed();"class="login100-form-btn" href="#m2-o" >
                Confirmar y Enviar </a>
              
            </div>
          </div>-->
          <a href="#m2-o"type="submit" name="submit" data-toggle="modal" onclick="insertarPed();"><button class="bn632-hover bn22">Confirmar y Enviar</button></a>
          <style>.bn632-hover {
  width: 190px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 7px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn22 {
  background-image: linear-gradient(
    to right,
    #0ba360,
    #3cba92,
    #30dd8a,
    #2bb673
  );
  box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}</style>
  </td>
  <tr>
  </table>

<div class="modal-container" tabindex="-1" role="dialog"  id="m2-o" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <h1 class="modal__title">¿Estás seguro?</h1>
      <p class="modal__text">Has agregado:</p>
     <br>
      <form class="login100-form validate-form" id="formulario"method="POST"  action="get_pedido.php">
     <div class="modal-body">
     <div class="table-wrapper">
     <table id = "tablita" style="width:100%" class="fl-table">
    <thead>
      <tr>
          <th> COLOR </th>
          <th> METROS </th>
      </tr>

    </thead>      
    <tbody id="tbody">

</tbody></table>
      
    </div>
  </div>
  <br>
  <center><strong>Al presionar "Enviar y descargar" tu pedido será enviado y se te descargará un archivo PDF como comprobante de tu pedido.</strong></center>
  <br>
 
        <table style="width:100%;" align="center">
          <tr>
            <td align="center">
      <!--<a href="form.php#m2-c" id="exit" align="center"style="width: 50%;background: #FA5882;;color:white"class="modal__btn"><strong>Cancelar</strong></a>-->
      <a href="form.php#m2-c" style="width:40%" id="exit"><button class="bn632-hover bn28">Cancelar</button></a>
            </td>
            <td align="center">
      <input onclick ="location.href='#m-success'"type="submit" id="insertarpedido"value="Enviar y Descargar"name="submit"align="center"class="bn632-hover bn22"> <!--<strong>Aceptar</strong></button>--> 
     <!--<a href="#m-success" type="submit" id="insertarpedido" name="submit" style="width:40%" ><button class="bn632-hover bn22">Enviar y Descargar</button></a>-->
     <style>.bn632-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 7px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn22 {
  background-image: linear-gradient(
    to right,
    #0ba360,
    #3cba92,
    #30dd8a,
    #2bb673
  );
  box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}</style>
            </td>
          </tr>
        </table>
        <strong id="todo"> </strong>    
     </form> 
      <!--<a href="#m5-c" id="exit2"class="link-2"></a>-->
      <a href="#m5-c"><button class="bn69-hover bn69">x</button></a>
      <style>.bn69-hover {
 width: 4rem;
  height: 4rem;
  border: 1px solid var(--border-color);
  border-radius: 100rem;
  background: #FA5882;
  color: white;
  font-size: 2.2rem;

  position: absolute;
  top: 2rem;
  right: 2rem;

  display: flex;
  justify-content: center;
  align-items: center;


  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn69-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn69-hover:focus {
  outline: none;
}

.bn69-hover.bn69 {
  background-image: linear-gradient(
    to right,
    #eb3941,
    #f15e64,
    #e14e53,
    #e2373f
  );
  box-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
}</style>
    </div>
  </div>


 <div class="modal-container"   id="m-success" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <center> <h1 class="modal__title">Pedido Enviado</h1> </center><br><br>
      <div class="modal-body1">
        <center> <img src="css/images/aceptar.png" height="80px" width="80px"></center><br><br><br>
        <center><a href="form.php#m2-c" id="exit" align="center"style="width: 50%;background: #190707;color:white"class="modal__btn"><strong>Aceptar</strong></a></center>
      </div>
      </div>
      </div>  
      
          
      <!--  </form>--> <!--form -->
      </div>  <!--wrap -->
    </div>  <!--log -->
  </div>  <!--limiter -->
  
 <div id="dropDownSelect1"></div>
  

<script src="js/main.js"></script>
  
<style>
body {
  
  background: #ecf0f1;
  color: #34495e
 }
.value {
  font-size: 5em;
  width: 100px; 
  height: 250px;
  line-height: 80px;
  margin: 25px auto;
  text-shadow: white 2px 2px 2px;
}
input[type="range"] {
  display: block;
  -webkit-appearance: none;
  background-color: #bdc3c7;
  width: 300px;
  height: 5px;
  border-radius: 5px;
  margin: 0 auto;
  outline: 0;
}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background-color: #e74c3c;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid white;
  cursor: pointer;
  transition: .3s ease-in-out;
}
  input[type="range"]::-webkit-slider-thumb:hover {
    background-color: white;
    border: 2px solid #e74c3c;
  }
  input[type="range"]::-webkit-slider-thumb:active {
    transform: scale(2);
  }
.login100-form-btn:hover{
    color: white;
}

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  
  --primary: hsl(255, 30%, 55%);
  --focus: hsl(210, 90%, 50%);
  --border-color: hsla(0, 0%, 100%, .2);
  --background: white;
  --shadow-1: hsla(236, 50%, 50%, .3);
  --shadow-2: hsla(236, 50%, 50%, .4);

  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', sans-serif;
  
  background: var(--global-background);
}

a,
a:link {
  font-family: inherit;
  text-decoration: none;
}

a:focus {
  outline: none;
}

button::-moz-focus-inner {
  border: 0;
}
/* box */
.box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 10vh;
  padding: 0 4rem 2rem;
}

.box:not(:first-child) {
  height: 10rem;
}

.box__title {
  font-size: 10rem;
  font-weight: normal;
  letter-spacing: .8rem;
  margin-bottom: 2.6rem;
}

.box__title::first-letter {
  color: var(--primary);
}

.box__p,
.box__info,
.box__note {
  font-size: 1.6rem;
}

.box__info {
  margin-top: 6rem;
}

.box__note {
  line-height: 2;
}

/* modal */
.modal-container {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10;

  display: none;
  justify-content: center;
  align-items: center;

  width: 100%;
  height: 100%;

  /* --m-background is set as inline style */
  background: var(--m-background);
}
.modal-container:target {
  display: flex;

}
.modal-body{
height: 100px;
  width: 100%;
  overflow-y: auto;
}
.modal-body1{
 height: 150px;
  width: 100%;
}
.modal {
  width: 60rem;
  padding: 4rem 2rem;
  border-radius: .8rem;

  color: var(--light);
  background: var(--background);
  box-shadow: var(--m-shadow, .4rem .4rem 10.2rem .2rem) var(--shadow-1);
  position: relative;
  overflow: auto;
}
.modal__title {
  font-size: 3.2rem;
}
.modal__text {
  padding: 0 4rem;
  margin-top: 4rem;

  font-size: 1.6rem;
  line-height: 2;
}
.modal__btn {
  margin-top: 4rem;
  padding: 1rem 2rem;
  border: 1px solid var(--border-color);
  border-radius: 100rem;

  color: inherit;
  background: transparent;
  font-size: 1.4rem;
  font-family: inherit;
  letter-spacing: .2rem;

  transition: .2s;
  cursor: pointer;
}

.modal__btn:nth-of-type(1) {
  margin-right: 1rem;
}

.modal__btn:hover,
.modal__btn:focus {
  background: var(--focus);
  border-color: var(--focus);
  transform: translateY(-.2rem);
}
.modal__btn2 {
  margin-top: 0rem;
  padding: 1rem 2rem;
  border: 1px solid var(--border-color);
  border-radius: 100rem;
   color: inherit;
  background: transparent;
  font-size: 1.4rem;
  font-family: inherit;
  letter-spacing: .2rem;
  transition: .2s;
  cursor: pointer;
}
.modal__btn2:nth-of-type(1) {
  margin-right: 1rem;
}
.modal__btn2:hover,
.modal__btn2:focus {
  background: var(--focus);
  border-color: var(--focus);
  transform: translateY(-.2rem);
}

/* link-... */
.link-1 {
  font-size: 1.8rem;

  color: var(--light);
  background: var(--background);
  box-shadow: .4rem .4rem 2.4rem .2rem var(--shadow-1);
  border-radius: 100rem;
  padding: 1.4rem 3.2rem;

  transition: .2s;
}

.link-1:hover,
.link-1:focus {
  transform: translateY(-.2rem);
  box-shadow: 0 0 4.4rem .2rem var(--shadow-2);
}

.link-1:focus {
  box-shadow:
    0 0 4.4rem .2rem var(--shadow-2),
    0 0 0 .4rem var(--global-background),
    0 0 0 .5rem var(--focus);
}


.link-2 {
  width: 4rem;
  height: 4rem;
  border: 1px solid var(--border-color);
  border-radius: 100rem;
  background: #FA5882;
  color: white;
  font-size: 2.2rem;

  position: absolute;
  top: 2rem;
  right: 2rem;

  display: flex;
  justify-content: center;
  align-items: center;

  transition: .2s;
}
.link-2::before {
  content: '×';

  transform: translateY(-.1rem);
}
.link-2:hover,
.link-2:focus {
  color: white;
  background: var(--focus);
  border-color: var(--focus);
  transform: translateY(-.2rem);
}

.abs-site-link {
  position: fixed;
  bottom: 20px;
  left: 20px;
  color: hsla(0, 0%, 1000%, .6);
  font-size: 1.6rem;
}

.table-wrapper{
    margin: 5px 100px 100px;
    box-shadow: 0px 15px 30px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 10px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 70%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* DEFAULTS */

@import &#34;
compass/css3&#34;
;
 @import url(https://fonts.googleapis.com/css?family=Lato:300,400,900);

 .container {
   height: 100%;
   min-height: 100%;
   margin: 20px  auto;
}
 .button-wrap {

   position: relative;
   text-align: center;
   top: 0px;
   /*margin-top: 0.5em;*/
}
 @media (max-width: 40em) {
   .button-wrap {
    /* margin-top: -1.5em;*/
  }
}
 .button-label {
   display: inline-block;
   padding: 1.5em 2.5em;
   margin: 0.5em;
   cursor: pointer;
   color: #292929;
   border-radius: 0.25em;
   background: #efefef;
   box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);
   transition: 0.3s;
   user-select: none;
}
 .button-label h1 {
   font-size: 1.8em;
   font-family: &#34;
  Lato&#34;
  , sans-serif;
}
 .button-label:hover {
   background: #d6d6d6;
   color: #101010;
   box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
}
 .button-label:active {
   
   box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
}
 @media (max-width: 40em) {
   .button-label {
     padding: 0em 1em 3px;
     margin: 0.25em;
  }
}
 #yes-button:checked + .button-label {
   background: #2ecc71;
   color: #efefef;
}
 #yes-button:checked + .button-label:hover {
   background: #29b765;
   color: #e2e2e2;
}
 #no-button:checked + .button-label {
   background: #d91e18;
   color: #efefef;
}
 #no-button:checked + .button-label:hover {
   background: #c21b15;
   color: #e2e2e2;
}
 
 .hidden {
   display: none;
}
 
</style>

<script>
  let inicio = 0; 
  let bandera = false;
function aumentar(){
  if ($('#yes-button').is(':checked')){
 let cantidad = document.getElementById('cantidad').value = ++inicio; 
document.getElementById("cantidad").style.visibility = 'visible';
}else{
      if(inicio > 0){
    let cantidad = document.getElementById('cantidad').value = --inicio; 
    document.getElementById("cantidad").style.visibility = 'visible';
  }
}
const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;

bandera = true;
 }


let inicio2 = 0; 
let bandera2= false;
function aumentar2(){ 
   if ($('#yes-button').is(':checked')){
let cantidad2 = document.getElementById('cantidad2').value = ++inicio2; 
document.getElementById("cantidad2").style.visibility = 'visible';
}else{
      if(inicio2 > 0){
    let cantidad2 = document.getElementById('cantidad2').value = --inicio2; 
    document.getElementById("cantidad2").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;

  bandera2 = true;
  
}
 let inicio3 = 0; 
 let bandera3 = false;
function aumentar3(){ 
   if ($('#yes-button').is(':checked')){
let cantidad3 = document.getElementById('cantidad3').value = ++inicio3; 
document.getElementById("cantidad3").style.visibility = 'visible';
}else{
      if(inicio3 > 0){
    let cantidad3 = document.getElementById('cantidad3').value = --inicio3; 
    document.getElementById("cantidad3").style.visibility = 'visible';
  }
}

 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera3=true;
}
let inicio4 = 0;
let bandera4= false; 
function aumentar4(){ 
   if ($('#yes-button').is(':checked')){
let cantidad4 = document.getElementById('cantidad4').value = ++inicio4; 
document.getElementById("cantidad4").style.visibility = 'visible';
}else{
      if(inicio4 > 0){
    let cantidad4 = document.getElementById('cantidad4').value = --inicio4; 
    document.getElementById("cantidad4").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera4 = true;
}
  let inicio5 = 0; 
  let bandera5 = false;
function aumentar5(){ 
   if ($('#yes-button').is(':checked')){
let cantidad5 = document.getElementById('cantidad5').value = ++inicio5; 
document.getElementById("cantidad5").style.visibility = 'visible';
}else{
      if(inicio5 > 0){
    let cantidad5 = document.getElementById('cantidad5').value = --inicio5; 
    document.getElementById("cantidad5").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera5 = true;
}

  let inicio6 = 0; 
  let bandera6 = false;
function aumentar6(){ 
   if ($('#yes-button').is(':checked')){
let cantidad6 = document.getElementById('cantidad6').value = ++inicio6; 
document.getElementById("cantidad6").style.visibility = 'visible';
}else{
      if(inicio6 > 0){
    let cantidad = document.getElementById('cantidad6').value = --inicio6; 
    document.getElementById("cantidad6").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 

  bandera6=true;
}


  let inicio7 = 0; 
  let bandera7 = false;
function aumentar7(){ 
   if ($('#yes-button').is(':checked')){
let cantidad7 = document.getElementById('cantidad7').value = ++inicio7; 
document.getElementById("cantidad7").style.visibility = 'visible';
}else{
      if(inicio7 > 0){
    let cantidad7 = document.getElementById('cantidad7').value = --inicio7; 
    document.getElementById("cantidad7").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera7=true; 
}
  let inicio8 = 0;
  let bandera8 = false; 
function aumentar8(){ 
   if ($('#yes-button').is(':checked')){
let cantidad8 = document.getElementById('cantidad8').value = ++inicio8; 
document.getElementById("cantidad8").style.visibility = 'visible';
}else{
      if(inicio8 > 0){
    let cantidad8 = document.getElementById('cantidad8').value = --inicio8; 
    document.getElementById("cantidad8").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera8 = true; 
}
  let inicio9 = 0; 
  let bandera9 = false;
function aumentar9(){ 
   if ($('#yes-button').is(':checked')){
let cantidad9 = document.getElementById('cantidad9').value = ++inicio9; 
document.getElementById("cantidad9").style.visibility = 'visible';
}else{
      if(inicio9 > 0){
    let cantidad9 = document.getElementById('cantidad9').value = --inicio9; 
    document.getElementById("cantidad9").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera9=true; 
}
  let inicio10 = 0;
  let bandera10 = false; 
function aumentar10(){ 
   if ($('#yes-button').is(':checked')){
let cantidad10 = document.getElementById('cantidad10').value = ++inicio10; 
document.getElementById("cantidad10").style.visibility = 'visible';
}else{
      if(inicio10 > 0){
    let cantidad10 = document.getElementById('cantidad10').value = --inicio10; 
    document.getElementById("cantidad10").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera10=true;
}

  let inicio11 = 0;
  let bandera11 = false; 
function aumentar11(){ 
   if ($('#yes-button').is(':checked')){
let cantidad11 = document.getElementById('cantidad11').value = ++inicio11; 
document.getElementById("cantidad11").style.visibility = 'visible';
}else{
      if(inicio11 > 0){
    let cantidad11 = document.getElementById('cantidad11').value = --inicio11; 
    document.getElementById("cantidad11").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera11 = true; 
}
  let inicio12 = 0;
  let bandera12 = false; 
function aumentar12(){ 
   if ($('#yes-button').is(':checked')){
let cantidad12 = document.getElementById('cantidad12').value = ++inicio12; 
document.getElementById("cantidad12").style.visibility = 'visible';
}else{
      if(inicio12 > 0){
    let cantidad12 = document.getElementById('cantidad12').value = --inicio12; 
    document.getElementById("cantidad12").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera12 = true;
}
  let inicio13 = 0;
  let bandera13 = false; 
function aumentar13(){ 
   if ($('#yes-button').is(':checked')){
let cantidad13 = document.getElementById('cantidad13').value = ++inicio13; 
document.getElementById("cantidad13").style.visibility = 'visible';
}else{
      if(inicio13 > 0){
    let cantidad13 = document.getElementById('cantidad13').value = --inicio13; 
    document.getElementById("cantidad13").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera13=true;
}
  let inicio14 = 0;
  let bandera14 = false; 
function aumentar14(){ 
   if ($('#yes-button').is(':checked')){
let cantidad14 = document.getElementById('cantidad14').value = ++inicio14; 
document.getElementById("cantidad14").style.visibility = 'visible';
}else{
      if(inicio14 > 0){
    let cantidad14 = document.getElementById('cantidad14').value = --inicio14; 
    document.getElementById("cantidad14").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera14 = true; 
}
  let inicio15 = 0; 
  let bandera15 = false;
function aumentar15(){ 
   if ($('#yes-button').is(':checked')){
let cantidad15 = document.getElementById('cantidad15').value = ++inicio15; 
document.getElementById("cantidad15").style.visibility = 'visible';
}else{
      if(inicio15 > 0){
    let cantidad15 = document.getElementById('cantidad15').value = --inicio15; 
    document.getElementById("cantidad15").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera15=true; 
}
  let inicio16 = 0; 
  let bandera16 = false;
function aumentar16(){ 
  if ($('#yes-button').is(':checked')){
let cantidad16= document.getElementById('cantidad16').value = ++inicio16; 
document.getElementById("cantidad16").style.visibility = 'visible';
}else{
      if(inicio16 > 0){
    let cantidad16 = document.getElementById('cantidad16').value = --inicio16; 
    document.getElementById("cantidad16").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera16 = true;
}
  let inicio17 = 0; 
  let bandera17 = false;
function aumentar17(){ 
  if ($('#yes-button').is(':checked')){
let cantidad17 = document.getElementById('cantidad17').value = ++inicio17; 
document.getElementById("cantidad17").style.visibility = 'visible';
 }else{
      if(inicio17 > 0){
    let cantidad17 = document.getElementById('cantidad17').value = --inicio17; 
    document.getElementById("cantidad17").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera17 = true;
}
  let inicio18 = 0; 
  let bandera18 = false;
function aumentar18(){ 
  if ($('#yes-button').is(':checked')){
let cantidad18 = document.getElementById('cantidad18').value = ++inicio18; 
document.getElementById("cantidad18").style.visibility = 'visible';
}else{
      if(inicio18 > 0){
    let cantidad18 = document.getElementById('cantidad18').value = --inicio18; 
    document.getElementById("cantidad18").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera18 = true;
}
  let inicio19 = 0; 
  let bandera19 = false;
function aumentar19(){ 
  if ($('#yes-button').is(':checked')){
let cantidad19 = document.getElementById('cantidad19').value = ++inicio19; 
document.getElementById("cantidad19").style.visibility = 'visible';
}else{
      if(inicio19 > 0){
    let cantidad19 = document.getElementById('cantidad19').value = --inicio19; 
    document.getElementById("cantidad19").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera19 = true;
}
  let inicio20 = 0; 
  let bandera20 = false;
function aumentar20(){ 
  if ($('#yes-button').is(':checked')){
let cantidad20 = document.getElementById('cantidad20').value = ++inicio20; 
document.getElementById("cantidad20").style.visibility = 'visible';
}else{
      if(inicio20 > 0){
    let cantidad20 = document.getElementById('cantidad20').value = --inicio20; 
    document.getElementById("cantidad20").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera20 = true;

}

  let inicio21 = 0; 
  let bandera21 = false;
function aumentar21(){ 
  if ($('#yes-button').is(':checked')){
let cantidad21 = document.getElementById('cantidad21').value = ++inicio21; 
document.getElementById("cantidad21").style.visibility = 'visible';
 }else{
      if(inicio21 > 0){
    let cantidad21 = document.getElementById('cantidad21').value = --inicio21; 
    document.getElementById("cantidad21").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera21=true;

}
  let inicio22 = 0; 
  let bandera22 = false;
function aumentar22(){ 
  if ($('#yes-button').is(':checked')){
let cantidad22 = document.getElementById('cantidad22').value = ++inicio22; 
document.getElementById("cantidad22").style.visibility = 'visible';
}else{
      if(inicio22 > 0){
    let cantidad22 = document.getElementById('cantidad22').value = --inicio22; 
    document.getElementById("cantidad22").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera22 = true;
}
  let inicio23 = 0;
  let bandera23 = false; 
function aumentar23(){ 
  if ($('#yes-button').is(':checked')){
let cantidad23 = document.getElementById('cantidad23').value = ++inicio23; 
document.getElementById("cantidad23").style.visibility = 'visible';
}else{
      if(inicio23 > 0){
    let cantidad23 = document.getElementById('cantidad23').value = --inicio23; 
    document.getElementById("cantidad23").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera23 = true; 
}
  let inicio24 = 0;
  let bandera24 = false; 
function aumentar24(){ 
  if ($('#yes-button').is(':checked')){
let cantidad24 = document.getElementById('cantidad24').value = ++inicio24; 
document.getElementById("cantidad24").style.visibility = 'visible';
}else{
      if(inicio24 > 0){
    let cantidad24 = document.getElementById('cantidad24').value = --inicio24; 
    document.getElementById("cantidad24").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera24 = true;
}
  let inicio25 = 0;
  let bandera25 = false; 
function aumentar25(){ 
  if ($('#yes-button').is(':checked')){
let cantidad25 = document.getElementById('cantidad25').value = ++inicio25; 
document.getElementById("cantidad25").style.visibility = 'visible';
}else{
      if(inicio25 > 0){
    let cantidad25 = document.getElementById('cantidad25').value = --inicio25; 
    document.getElementById("cantidad25").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera25 = true;  
}
  let inicio26 = 0; 
  let bandera26 = false;
function aumentar26(){ 
  if ($('#yes-button').is(':checked')){
let cantidad26 = document.getElementById('cantidad26').value = ++inicio26; 
document.getElementById("cantidad26").style.visibility = 'visible';
}else{
      if(inicio26 > 0){
    let cantidad26 = document.getElementById('cantidad26').value = --inicio26; 
    document.getElementById("cantidad26").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera26 = true; 
}
  let inicio27 = 0;
  let bandera27 = false; 
function aumentar27(){ 
  if ($('#yes-button').is(':checked')){
let cantidad27 = document.getElementById('cantidad27').value = ++inicio27; 
document.getElementById("cantidad27").style.visibility = 'visible';
}else{
      if(inicio27 > 0){
    let cantidad27 = document.getElementById('cantidad27').value = --inicio27; 
    document.getElementById("cantidad27").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera27 = true;

}
  let inicio28 = 0; 
let bandera28 = false;
function aumentar28(){ 
  if ($('#yes-button').is(':checked')){
let cantidad28 = document.getElementById('cantidad28').value = ++inicio28; 
document.getElementById("cantidad28").style.visibility = 'visible';
}else{
      if(inicio28 > 0){
    let cantidad28 = document.getElementById('cantidad28').value = --inicio28; 
    document.getElementById("cantidad28").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera28 = true; 
}
  let inicio29 = 0;
  let bandera29 = false; 
function aumentar29(){ 
  if ($('#yes-button').is(':checked')){
let cantidad29 = document.getElementById('cantidad29').value = ++inicio29; 
document.getElementById("cantidad29").style.visibility = 'visible';
}else{
      if(inicio29 > 0){
    let cantidad29 = document.getElementById('cantidad29').value = --inicio29; 
    document.getElementById("cantidad29").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera29 = true;
}

  let inicio30 = 0; 
let bandera30 = false;
function aumentar30(){ 
  if ($('#yes-button').is(':checked')){
let cantidad30 = document.getElementById('cantidad30').value = ++inicio30; 
document.getElementById("cantidad30").style.visibility = 'visible';
}else{
      if(inicio30 > 0){
    let cantidad30 = document.getElementById('cantidad30').value = --inicio30; 
    document.getElementById("cantidad30").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera30 = true; 
}
  let inicio31 = 0; 
  let bandera31 = false;
function aumentar31(){ 
  if ($('#yes-button').is(':checked')){
let cantidad31 = document.getElementById('cantidad31').value = ++inicio31; 
document.getElementById("cantidad31").style.visibility = 'visible';
}else{
      if(inicio31 > 0){
    let cantidad31 = document.getElementById('cantidad31').value = --inicio31; 
    document.getElementById("cantidad31").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera31 = true; 
}
  let inicio32 = 0;
  let bandera32 = false; 
function aumentar32(){ 
  if ($('#yes-button').is(':checked')){
let cantidad32 = document.getElementById('cantidad32').value = ++inicio32; 
document.getElementById("cantidad32").style.visibility = 'visible';
}else{
      if(inicio32 > 0){
    let cantidad32 = document.getElementById('cantidad32').value = --inicio32; 
    document.getElementById("cantidad32").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum;
  bandera32 = true; 
}
  let inicio33 = 0; 
  let bandera33 = false;
function aumentar33(){ 
  if ($('#yes-button').is(':checked')){
let cantidad33 = document.getElementById('cantidad33').value = ++inicio33; 
document.getElementById("cantidad33").style.visibility = 'visible';
}else{
      if(inicio33 > 0){
    let cantidad33 = document.getElementById('cantidad33').value = --inicio33; 
    document.getElementById("cantidad33").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera33  = true;
}

  let inicio34 = 0; 
  let bandera34 = false;
function aumentar34(){ 
  if ($('#yes-button').is(':checked')){
let cantidad34 = document.getElementById('cantidad34').value = ++inicio34; 
document.getElementById("cantidad34").style.visibility = 'visible';
}else{
      if(inicio34 > 0){
    let cantidad34 = document.getElementById('cantidad34').value = --inicio34; 
    document.getElementById("cantidad34").style.visibility = 'visible';
  }
}
 const fees = document.querySelectorAll(".fee");
  const total = document.querySelector("#total_fee");
  let sum = 0;
  
  fees.forEach(fee => {
     if(fee.valueAsNumber){
     sum += fee.valueAsNumber;
     }      
  });
  total.value = sum; 
  bandera34  = true;
}

</script>



<script>

/* =============================================================================*/

function insertarPed(){


 $('#tablita tr:not(:first)').remove();
 //$('#tablita').children( 'tr:not(:first)' ).remove();


if(bandera){
 // $('#tablita  ').remove();
  let inputValue = document.getElementById("color-1").value;
   let cant = document.getElementById("cantidad").value; 
   let fila = "<tr><td><input type='hidden' name='color1' value='Ice Blue'>" +inputValue+ "</td> <td> <input type='hidden' value="+ cant +" name='canti'>" + cant+ "</td> </tr>";
  let btn = document.createElement("TR");
    btn.innerHTML=fila;
  document.getElementById("tablita").appendChild(btn);

 
}

if(bandera2){
 //$('#tablita tr').remove();
let inputValue2 = document.getElementById("color-2").value;
 let cant2 = document.getElementById("cantidad2").value;
let fila2 = "<tr><td><input type='hidden' name='color2' value='Sky Blue'>"+inputValue2+ "</td> <td><input type='hidden' name='canti2' value="+cant2 +">" + cant2+ "</td> </tr>";
  let btn2 = document.createElement("TR");
    btn2.innerHTML=fila2;
  document.getElementById("tablita").appendChild(btn2);
}

if(bandera3){
 let inputValue3 = document.getElementById("color-3").value;
  let cant3 = document.getElementById("cantidad3").value; 
   let fila3 = "<tr><td><input type='hidden' name='color3' value='Brilliant Blue'>" +inputValue3+ "</td> <td><input type='hidden' name='canti3'value="+cant3+" >" + cant3+ "</td> </tr>";
  let btn3 = document.createElement("TR");
    btn3.innerHTML=fila3;
  document.getElementById("tablita").appendChild(btn3);
}
if(bandera4){
 let inputValue4 = document.getElementById("color-4").value;
  let cant4 = document.getElementById("cantidad4").value; 
   let fila4 = "<tr><td> <input type='hidden' name='color4' value='Dark Blue'>" +inputValue4+ "</td> <td> <input type='hidden' name='canti4' value="+cant4+"> " + cant4+ "</td> </tr>";
  let btn4 = document.createElement("TR");
    btn4.innerHTML=fila4;
  document.getElementById("tablita").appendChild(btn4);
}
if(bandera5){
 let inputValue5 = document.getElementById("color-5").value;
  let cant5 = document.getElementById("cantidad5").value; 
   let fila5 = "<tr><td> <input type='hidden' name='color5' value='Steel Blue'> " +inputValue5+ "</td> <td> <input type='hidden' name='canti5' value="+cant5+" >" + cant5+ "</td> </tr>";
  let btn5 = document.createElement("TR");
    btn5.innerHTML=fila5;
  document.getElementById("tablita").appendChild(btn5);
}
if(bandera6){
 let inputValue6 = document.getElementById("color-6").value;
  let cant6 = document.getElementById("cantidad6").value; 
   let fila6 = "<tr><td><input type='hidden' name='color6' value='Light Gray'>" +inputValue6+ "</td> <td><input type='hidden' name='canti6' value="+cant6+">" + cant6+ "</td> </tr>";
  let btn6 = document.createElement("TR");
    btn6.innerHTML=fila6;
  document.getElementById("tablita").appendChild(btn6);
}
if(bandera7){
 let inputValue7 = document.getElementById("color-7").value;
  let cant7 = document.getElementById("cantidad7").value; 
   let fila7 = "<tr><td><input type='hidden' name='color7' value='Gray'>" +inputValue7+ "</td> <td><input type='hidden' name='canti7' value="+cant7 +">" + cant7+ "</td> </tr>";
  let btn7 = document.createElement("TR");
    btn7.innerHTML=fila7;
  document.getElementById("tablita").appendChild(btn7);
}
if(bandera8){
 let inputValue8 = document.getElementById("color-8").value;
  let cant8 = document.getElementById("cantidad8").value; 
   let fila8 = "<tr><td><input type='hidden' name='color8' value='Dark Gray'>" +inputValue8+ "</td> <td><input type='hidden' name='canti8' value="+cant8 +">" + cant8+ "</td> </tr>";
  let btn8 = document.createElement("TR");
    btn8.innerHTML=fila8;
  document.getElementById("tablita").appendChild(btn8);
}
if(bandera9){
 let inputValue9 = document.getElementById("color-9").value;
  let cant9 = document.getElementById("cantidad9").value; 
   let fila9 = "<tr><td><input type='hidden' name='color9' value='Yellow'>" +inputValue9+ "</td> <td><input type='hidden' name='canti9' value="+cant9 +">" + cant9+ "</td> </tr>";
  let btn9 = document.createElement("TR");
    btn9.innerHTML=fila9;
  document.getElementById("tablita").appendChild(btn9);
}
if(bandera10){
 let inputValue10 = document.getElementById("color-10").value;
  let cant10 = document.getElementById("cantidad10").value; 
   let fila10 = "<tr><td><input type='hidden' name='color10' value='Signal Yellow'>" +inputValue10+ "</td> <td><input type='hidden' name='canti10' value="+cant10 +">" + cant10+ "</td> </tr>";
  let btn10 = document.createElement("TR");
    btn10.innerHTML=fila10;
  document.getElementById("tablita").appendChild(btn10);
}
if(bandera11){
 let inputValue11 = document.getElementById("color-11").value;
  let cant11 = document.getElementById("cantidad11").value; 
   let fila11 = "<tr><td><input type='hidden' name='color11' value='Pastel Orange'>" +inputValue11+ "</td> <td><input type='hidden' name='canti11' value="+cant11 +">" + cant11+ "</td> </tr>";
  let btn11 = document.createElement("TR");
    btn11.innerHTML=fila11;
  document.getElementById("tablita").appendChild(btn11);
}
if(bandera12){
 let inputValue12 = document.getElementById("color-12").value;
  let cant12 = document.getElementById("cantidad12").value; 
   let fila12 = "<tr><td><input type='hidden' name='color12' value='Orange'>" +inputValue12+ "</td> <td><input type='hidden' name='canti12' value="+cant12 +">" + cant12+ "</td> </tr>";
  let btn12 = document.createElement("TR");
    btn12.innerHTML=fila12;
  document.getElementById("tablita").appendChild(btn12);
}
if(bandera13){
 let inputValue13 = document.getElementById("color-13").value;
  let cant13 = document.getElementById("cantidad13").value; 
   let fila13 = "<tr><td><input type='hidden' name='color13' value='Orange Red'>" +inputValue13+ "</td> <td><input type='hidden' name='canti13' value="+cant13 +">" + cant13+ "</td> </tr>";
  let btn13 = document.createElement("TR");
    btn13.innerHTML=fila13;
  document.getElementById("tablita").appendChild(btn13);
}
if(bandera14){
 let inputValue14 = document.getElementById("color-14").value;
  let cant14 = document.getElementById("cantidad14").value; 
   let fila14 = "<tr><td><input type='hidden' name='color14' value='Red'>" +inputValue14+ "</td> <td><input type='hidden' name='canti14' value="+cant14 +">" + cant14+ "</td> </tr>";
  let btn14 = document.createElement("TR");
    btn14.innerHTML=fila14;
  document.getElementById("tablita").appendChild(btn14);
}
if(bandera15){
 let inputValue15 = document.getElementById("color-15").value;
  let cant15 = document.getElementById("cantidad15").value; 
   let fila15 = "<tr><td><input type='hidden' name='color15' value='Dark Red'>" +inputValue15+ "</td> <td><input type='hidden' name='canti15' value="+cant15 +">" + cant15+ "</td> </tr>";
  let btn15 = document.createElement("TR");
    btn15.innerHTML=fila15;
  document.getElementById("tablita").appendChild(btn15);
}
if(bandera16){
 let inputValue16 = document.getElementById("color-16").value;
  let cant16 = document.getElementById("cantidad16").value; 
   let fila16 = "<tr><td><input type='hidden' name='color16' value='Cream'>" +inputValue16+ "</td> <td><input type='hidden' name='canti16' value="+cant16 +">" + cant16+ "</td> </tr>";
  let btn16 = document.createElement("TR");
    btn16.innerHTML=fila16;
  document.getElementById("tablita").appendChild(btn16);
}
if(bandera17){
 let inputValue17 = document.getElementById("color-17").value;
  let cant17 = document.getElementById("cantidad17").value; 
   let fila17 = "<tr><td><input type='hidden' name='color17' value='Mint'>" +inputValue17+ "</td> <td><input type='hidden' name='canti17' value="+cant17 +">" + cant17+ "</td> </tr>";
  let btn17 = document.createElement("TR");
    btn17.innerHTML=fila17;
  document.getElementById("tablita").appendChild(btn17);
}
if(bandera18){
 let inputValue18 = document.getElementById("color-18").value;
  let cant18 = document.getElementById("cantidad18").value; 
   let fila18 = "<tr><td><input type='hidden' name='color18' value='Turquoise'>" +inputValue18+ "</td> <td><input type='hidden' name='canti18' value="+cant18 +">" + cant18+ "</td> </tr>";
  let btn18 = document.createElement("TR");
    btn18.innerHTML=fila18;
  document.getElementById("tablita").appendChild(btn18);
}
if(bandera19){
 let inputValue19 = document.getElementById("color-19").value;
  let cant19 = document.getElementById("cantidad19").value; 
   let fila19 = "<tr><td><input type='hidden' name='color19' value='Lime Tree Green'>" +inputValue19+ "</td> <td><input type='hidden' name='canti19' value="+cant19 +">" + cant19+ "</td> </tr>";
  let btn19 = document.createElement("TR");
    btn19.innerHTML=fila19;
  document.getElementById("tablita").appendChild(btn19);
}
if(bandera20){
 let inputValue20 = document.getElementById("color-20").value;
  let cant20 = document.getElementById("cantidad20").value; 
   let fila20 = "<tr><td><input type='hidden' name='color20' value='Yellow Green'>" +inputValue20+ "</td> <td><input type='hidden' name='canti20' value="+cant20 +">" + cant20+ "</td> </tr>";
  let btn20 = document.createElement("TR");
    btn20.innerHTML=fila20;
  document.getElementById("tablita").appendChild(btn20);
}
if(bandera21){
 let inputValue21 = document.getElementById("color-21").value;
  let cant21 = document.getElementById("cantidad21").value; 
   let fila21 = "<tr><td><input type='hidden' name='color21' value='Green'>" +inputValue21+ "</td> <td><input type='hidden' name='canti21' value="+cant21 +">" + cant21+ "</td> </tr>";
  let btn21 = document.createElement("TR");
    btn21.innerHTML=fila21;
  document.getElementById("tablita").appendChild(btn21);
}
if(bandera22){
 let inputValue22 = document.getElementById("color-22").value;
  let cant22 = document.getElementById("cantidad22").value; 
   let fila22 = "<tr><td><input type='hidden' name='color22' value='Forest Green'>" +inputValue22+ "</td> <td><input type='hidden' name='canti22' value="+cant22 +">" + cant22+ "</td> </tr>";
  let btn22 = document.createElement("TR");
    btn22.innerHTML=fila22;
  document.getElementById("tablita").appendChild(btn22);
}
if(bandera23){
 let inputValue23 = document.getElementById("color-23").value;
  let cant23 = document.getElementById("cantidad23").value; 
   let fila23 = "<tr><td><input type='hidden' name='color23' value='Silver Gray'>" +inputValue23+ "</td> <td><input type='hidden' name='canti23' value="+cant23 +">" + cant23+ "</td> </tr>";
  let btn23 = document.createElement("TR");
    btn23.innerHTML=fila23;
  document.getElementById("tablita").appendChild(btn23);
}
if(bandera24){
 let inputValue24 = document.getElementById("color-24").value;
  let cant24 = document.getElementById("cantidad24").value; 
   let fila24 = "<tr><td><input type='hidden' name='color24' value='Gold'>" +inputValue24+ "</td> <td><input type='hidden' name='canti24' value="+cant24 +">" + cant24+ "</td> </tr>";
  let btn24 = document.createElement("TR");
    btn24.innerHTML=fila24;
  document.getElementById("tablita").appendChild(btn24);
}
if(bandera25){
 let inputValue25 = document.getElementById("color-25").value;
  let cant25 = document.getElementById("cantidad25").value; 
   let fila25 = "<tr><td><input type='hidden' name='color25' value='Lavander'>" +inputValue25+ "</td> <td><input type='hidden' name='canti25' value="+cant25 +">" + cant25+ "</td> </tr>";
  let btn25 = document.createElement("TR");
    btn25.innerHTML=fila25;
  document.getElementById("tablita").appendChild(btn25);
}
if(bandera26){
 let inputValue26 = document.getElementById("color-26").value;
  let cant26 = document.getElementById("cantidad26").value; 
   let fila26 = "<tr><td><input type='hidden' name='color26' value='Purple'>" +inputValue26+ "</td> <td><input type='hidden' name='canti26' value="+cant26 +">" + cant26+ "</td> </tr>";
  let btn26 = document.createElement("TR");
    btn26.innerHTML=fila26;
  document.getElementById("tablita").appendChild(btn26);
}
if(bandera27){
 let inputValue27 = document.getElementById("color-27").value;
  let cant27 = document.getElementById("cantidad27").value; 
   let fila27 = "<tr><td><input type='hidden' name='color27' value='Soft Pink'>" +inputValue27+ "</td> <td><input type='hidden' name='canti27' value="+cant27 +">" + cant27+ "</td> </tr>";
  let btn27 = document.createElement("TR");
    btn27.innerHTML=fila27;
  document.getElementById("tablita").appendChild(btn27);
}
if(bandera28){
 let inputValue28 = document.getElementById("color-28").value;
  let cant28 = document.getElementById("cantidad28").value; 
   let fila28 = "<tr><td><input type='hidden' name='color28' value='Bright Pink'>" +inputValue28+ "</td> <td><input type='hidden' name='canti28' value="+cant28 +">" + cant28+ "</td> </tr>";
  let btn28 = document.createElement("TR");
    btn28.innerHTML=fila28;
  document.getElementById("tablita").appendChild(btn28);
}
if(bandera29){
 let inputValue29 = document.getElementById("color-29").value;
  let cant29 = document.getElementById("cantidad29").value; 
   let fila29 = "<tr><td><input type='hidden' name='color29' value='Black'>" +inputValue29+ "</td> <td><input type='hidden' name='canti29' value="+cant29 +">" + cant29+ "</td> </tr>";
  let btn29 = document.createElement("TR");
    btn29.innerHTML=fila29;
  document.getElementById("tablita").appendChild(btn29);
}
if(bandera30){
 let inputValue30 = document.getElementById("color-30").value;
  let cant30 = document.getElementById("cantidad30").value; 
   let fila30 = "<tr><td><input type='hidden' name='color30' value='Matte White'>" +inputValue30+ "</td> <td><input type='hidden' name='canti30' value="+cant30 +">" + cant30+ "</td> </tr>";
  let btn30 = document.createElement("TR");
    btn30.innerHTML=fila30;
  document.getElementById("tablita").appendChild(btn30);
}
if(bandera31){
 let inputValue31 = document.getElementById("color-31").value;
  let cant31 = document.getElementById("cantidad31").value; 
   let fila31 = "<tr><td><input type='hidden' name='color31' value='Matte Black'>" +inputValue31+ "</td> <td><input type='hidden' name='canti31' value="+cant31 +">" + cant31+ "</td> </tr>";
  let btn31 = document.createElement("TR");
    btn31.innerHTML=fila31;
  document.getElementById("tablita").appendChild(btn31);
}
if(bandera32){
 let inputValue32 = document.getElementById("color-32").value;
  let cant32 = document.getElementById("cantidad32").value; 
   let fila32 = "<tr><td><input type='hidden' name='color32' value='Light Brown'>" +inputValue32+ "</td> <td><input type='hidden' name='canti32' value="+cant32 +">" + cant32+ "</td> </tr>";
  let btn32 = document.createElement("TR");
    btn32.innerHTML=fila32;
  document.getElementById("tablita").appendChild(btn32);
}
if(bandera33){
 let inputValue33 = document.getElementById("color-33").value;
  let cant33 = document.getElementById("cantidad33").value; 
   let fila33 = "<tr><td><input type='hidden' name='color33' value='Brown'>" +inputValue33+ "</td> <td><input type='hidden' name='canti33' value="+cant33 +">" + cant33+ "</td> </tr>";
  let btn33 = document.createElement("TR");
    btn33.innerHTML=fila33;
  document.getElementById("tablita").appendChild(btn33);
}

if(bandera34){
 let inputValue34 = document.getElementById("color-34").value;
  let cant34 = document.getElementById("cantidad34").value; 
   let fila34 = "<tr><td><input type='hidden' name='color34' value='White'>" +inputValue34+ "</td> <td><input type='hidden' name='canti34' value="+cant34 +">" + cant34+ "</td> </tr>";
  let btn34 = document.createElement("TR");
    btn34.innerHTML=fila34;
  document.getElementById("tablita").appendChild(btn34);
}


}

</script>



</body>
</html>