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

  <title>Lista de Pedido</title>
</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="width: 1200px;">
        
          
                    <span class="login100-form-title p-b-26">
            <strong>Pedido</strong>
          </span>
          <br><br>                          
                            
                            <div align="center" style="width:35%;"class="wrap-login100-form-btn">
                            <div class="btn-salir"></div>
                            <button onclick="location.href = 'admin.php'" style="background: #FA5882;font-size: 12px; height: 30px;"type="submit" name="salir" class="login100-form-btn">
                            Regresar
                            </button>
                            </div>             

                        <br><br>
          
                      
            <?php 

                        include('../conexion.php');
                 

                $id_pedido = $_GET['id_pedido'];

                
                $query2 = mysqli_query($link,"SELECT usuario FROM usuario INNER JOIN registro ON usuario.id_usuario = registro.id_usuario WHERE registro.id_pedido = $id_pedido ");
                $row = mysqli_fetch_array($query2);
                
                $cant = mysqli_query($link,"SELECT total FROM pedido WHERE id_pedido = $id_pedido");              
                $fila = mysqli_fetch_array($cant);
                
            ?>

                     <center><strong style="font-size: 20px; color:#0B243B">Pedido del usuario: </strong><strong style="font-size: 20px;color:#B18904"><?php echo $row['usuario'];?></strong>  <img src="../css/images/perfil-del-usuario.png" height="40px" width="40px"></center>
                     <br><center>
                      <a href="generarpdf.php?id_pedido=<?php echo $id_pedido?>"><img src="../css/images/descargar.png" height="70px" width="70px"></a>
                    </center>
                        
                        <br>

                        <center><strong>Cantidad total del pedido: <?php echo $fila['total'];?></strong></center>

                        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            
            <th>Color</th>
            <th>Metros</th>
            <th>Editar</th>
            
        </tr>
        </thead>
     <tbody>

                     <?php 
                     $query3 = mysqli_query($link,"SELECT * FROM registro WHERE id_pedido = $id_pedido");
               while($row2 = mysqli_fetch_array($query3)){   

                            if($row2['cantidad'] > 0){
                     ?>   
      
            
        <tr>
            <td><strong style="color:black;"><?php echo $row2['color']?></strong></td>
            <td><strong style="color:black;"><?php echo $row2['cantidad']?></strong></td>
            <td align="center">
              

                <a href="#m5-o"data-id="<?php echo $row2['id_registro'];?>" id="<?php echo $row2['id_registro'];?>" type="number" min="0"data-target="#m5-o" data-toggle="modal" data-target="#m5-o" ><img src="../css/images/componer.png" height="50px" width="50px"></a>





<div class="modal-container" id="m5-o" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <center> <strong style="font-size:16px"> Modificar cantidad de pedido</strong> </center><br><br>
      
        

      <div class="modal-body1">
      <FORM method="POST" ACTION="modificar.php?id=<?php echo $row2['id_registro']?>">
         <center> <strong align="center"> 
              
          <a id='disminuir' style=""onclick="disminuir()"><img src="../css/images/boton-menos.png" width="30px" height="40px"></a>
          
          <input type="hidden" name="id_reg" id="id_reg">
         <!-- <input type="hidden" name="<?php echo $row2['id_registro'];?>">-->
          <input name="metros" id="metros" style="text-align: center;width:20% ; height:40px ; background:#E0E6F8; font-size: 17px; border-radius: 5px;"> </strong>         
          
          
          <a id='aumentar' onclick="aumentar()"><img src="../css/images/icono-mas.png" width="30px" height="40px"></a>

           </center><br>
          <br><br>


        <center><input type="submit" value="Modificar" align="center"style="width: 50%;background: #190707;color:white"class="modal__btn"></center>
        </FORM>
          <a href="#m2-c" id="exit2"class="link-2"></a>
      </div>

      </div>
      
</div>




            </td>

        </tr>


        
        
   
<?php 
        }else{

              $delete = mysqli_query($link,"DELETE * FROM registro WHERE id_pedido = '$id_pedido'");  

        }
}

 ?>
 <tbody>
   </table>
    







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
    margin: 5px 10px 10px;
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
    padding: 5px;
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
    background: #E6E6E6;
}
.fl-table tr:nth-child(odd){
  background: #E6E6E6;
}



.my-checkbox {
  transform: scale(2);
  margin-right: 11px;
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
  height: 7vh;
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
  width: 40rem;
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
  margin-top: 0rem;
  padding: 1rem 2rem;
  border: 1px solid var(--border-color);
  border-radius: 100rem;

  color: inherit;
  background: transparent;
  font-size: 1.1rem;
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
  width: 3rem;
  height: 3rem;
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



</style>



<script>
  let botones = document.querySelectorAll('[data-target="#m5-o"]');
botones.forEach(btn => {
    btn.addEventListener('click', function() {
        // Obtener columnas desde TR padre:
        let tds = this.closest('tr').querySelectorAll('td');
        // Obtener ID desde el botón
        let id = this.dataset.id;
        // Obtener datos por contenido de TD:
        
        let cantidad = tds[1].innerText;
        
        // Asignar datos a ventana modal:
       document.querySelector('#id_reg').value = id;
        document.querySelector('#metros').value = cantidad;
       
        console.log('abrir modal');
        $('#m5-o').modal();
    });
});

</script>


<script>
      
  
 

      function aumentar(){ 
  
  var cantidad = ++document.getElementById('metros').value;  
}

function disminuir(){

var cantidad = --document.getElementById('metros').value; 
}

</script>

</body>
</html>