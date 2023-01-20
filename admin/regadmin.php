<?php 
session_start();
if(@!$_SESSION['admin']){
header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link href="../style.css" rel="stylesheet">
  

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

  <title>Registro de Administradores</title>
</head>


<body>
   

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="width: 1200px;">
        
          <span class="login100-form-title p-b-26">
            <strong>Administradores</strong>
          </span>
          <br><br>
         

            <br>
                    <center>
                        <table  align="center" style="width: 100%" >
                            <tr >
                            <td align="center">
                               <!-- <a href="admin.php"><img src="../css/images/regresa.png"  height="60px" width="70px"></a>-->
                               <a href="admin.php"><button class="bn33"><strong style="font-size:18px">Regresar</strong></button></a>
                            
                        </td>
                        <td align="center">
                            <div class="box"><br><br>
                                <!--<a href="#m2-o" data-target="#exampleModal" data-toggle="modal" data-target="#m2-o" id="agregar"onClick="checkVal(this.form); return false;"><img src="../css/images/agregar-user.png"  height="70px" width="70px"></a>-->
                            <a href="#m2-o" data-target="#exampleModal" data-toggle="modal" data-target="#m2-o" id="agregar"onClick="checkVal(this.form); return false;"><button style="font-size:14px"class="bn33"><strong style="font-size:23px"> + </strong> </button></a>
  <style>.bn33 {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
  padding: 0.7em 2em;
  border-radius: 5px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}</style>

  <div class="modal-container" id="m2-o" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <h1 class="modal__title">Agregar nuevo administrador</h1>
      <p class="modal__text">Las contrase&ntilde;as se encriptan al registrar un nuevo administrador</p>
     <br>
     
        <form align="center"method="POST" action="agregar.php">
     

            <div class="wrap-input100 validate-input">
                        <input style="color: white;"class="input100" type="text" placeholder="Administrador"name="admin" required>
                        <span class="focus-input100" placeholder="Usuario"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input style="color:white; "class="input100" id="password"type="Password" placeholder="Contrase&ntilde;a"name="password" required>
                        <span class="focus-input100" placeholder="Password"></span>
                    </div><!--<button align="center"class="btn btn-primary" style="background: #0080FF; color: white; border-radius:5px; width:35%; height:40px" type="button" onclick="mostrarContrasena()"> Mostrar Contraseña</button>-->
                    <button type="button"onclick="mostrarContrasena()" class="bn34">Mostrar Contraseña</button></a>
                    <style>.bn34 {
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

       <!-- <button align="center"style="width: 50%;background: #31B404;color:white"class="modal__btn"><strong>Iniciar &rarr;</strong></button>
        -->
        <button class="bn632-hover bn22">Registrar</button>
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

                            


</td>
</tr>



                        </table>


                        <br><br>
          

          <div class="wrap-input100 validate-input">
            




            
            <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Administradores</th>
            
            <th>Eliminar Administrador</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                include('../conexion.php');
                $res = "SELECT * FROM admin";
                $ejec = mysqli_query($link,$res);
                while($row = mysqli_fetch_array($ejec)){


            ?>
        <tr>
            <td><strong style="color:black"><?php echo $row[1]; ?></strong></td>
            
            <td align="center">
                            <a href="deleteadmin.php?id_admin=<?php echo $row[0];?>" type="submit" name="salir"><img src="../css/images/cancelar.png" height="50px" width="50px"></a></td>
        </tr>
        <?php } ?>
        <tbody>
    </table>
</div>
            
          </div>

          
          
          
        

      </div>

    </div>
  </div>
  

  
  
  


  <script src="js/main.js"></script>

<style>
  *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    overflow-y: auto;
    margin: 10px 30px 30px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
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
    background: antiquewhite;
}
.fl-table tr:nth-child(odd){
  background: whitesmoke;
}


/* defaults */
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
  --light: hsl(220, 50%, 90%);
  --primary: hsl(255, 30%, 55%);
  --focus: hsl(210, 90%, 50%);
  --border-color: hsla(0, 0%, 100%, .2);
  --global-background: hsl(220, 25%, 10%);
  --background: linear-gradient(to right, hsl(210, 30%, 20%), hsl(255, 30%, 25%));
  --shadow-1: hsla(236, 50%, 50%, .3);
  --shadow-2: hsla(236, 50%, 50%, .4);

  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', sans-serif;
  color: var(--light);
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
  height: 5rem;
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

/* using :target */
/*
when users will click/enter button(link) browser will add a #id in a url and when that happens we'll show our users the modal that contains that id.
*/
.modal-container:target {
  display: flex;
}

.modal {
  width: 60rem;
  padding: 4rem 2rem;
  border-radius: .8rem;

  color: var(--light);
  background: var(--background);
  box-shadow: var(--m-shadow, .4rem .4rem 10.2rem .2rem) var(--shadow-1);
  position: relative;

  overflow: hidden;
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
  padding: 1rem 1.6rem;
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

  color: inherit;
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
</style>


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