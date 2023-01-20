<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<title>Pedido</title>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">


	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/adminstyles.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="iniciar.php" >
					<span class="login100-form-title p-b-26">
						Bienvenido
					</span>
					<br><br>
					<p>Por favor, ingresa tu usuario de Mercado libre, para identificar tu pedido.<p>

						<br><br>
					

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" placeholder="Usuario"name="user" required>
						<span class="focus-input100" placeholder="Usuario"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Iniciar
							</button>
						</div>
					</div>

					
				</form>


   <div class="box">
  <a  style= "background:#1C1C1C; font-size: 10px;width:45% ;height: 30px;border-radius: 50px; color: white;"href="#m2-o" class="login100-form-btn" id="m2-c">Verificar</a>
  

  <div class="modal-container" id="m2-o" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <h1 class="modal__title">Inicio de sesi&oacute;n</h1>
     <br>
     

      <form align="center"action="admin/validar.php" method="POST" >
 

      	<div class="wrap-input100 validate-input">
						<input style="color: white;"class="input100" type="text" placeholder="Usuario"name="usuario" required>
						<span class="focus-input100" placeholder="Usuario"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input style="color:white; "class="input100" id="password"type="Password" placeholder="Contrase&ntilde;a"name="password" required>
						<span class="focus-input100" placeholder="Password"></span>
					</div><!--<button class="btn btn-primary" style="background: #0080FF;color: white; border-radius:5px; width:35%; height:40px" type="button" onclick="mostrarContrasena()"> Mostrar Contraseña</button>-->
				<button type="button"onclick="mostrarContrasena()"class="bn33">Mostrar Contraseña</button>
				<style>.bn33 {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 12px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
  padding: 0.7em 2em;
  border-radius: 1px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}</style>

      	
      	<br><br>
      


      <!--<button align="center"style="width: 50%;background: #31B404;color:white"class="modal__btn"><strong>Iniciar &rarr;</strong></button>-->
      <button class="bn632-hover bn22">Iniciar</button>
      <style>.bn632-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
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
      	</form>
      
      <a href="#m2-c" class="link-2"></a>
    </div>
  </div>
</div>
			</div>

		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php 
if(isset($_POST['submit'])){
require("iniciar.php");
}?>	<script src="js/main.js"></script>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>

</body>
</html>