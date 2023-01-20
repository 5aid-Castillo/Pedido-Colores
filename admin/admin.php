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

    <title>Administrador</title>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="width: 1200px;">
                
                    <span class="login100-form-title p-b-26">
                        <strong>Registro de Pedidos</strong>
                    </span>
                    

                        <br><br>
    <center>
        <table align="center" style="width: 70%">
                <tr >
                    <td align="center">
                        <!--<a href="saliradmin.php"><img src="../css/images/power-off.png"  height="70px" width="70px"></a>-->
                        <a href="saliradmin.php"><button class="bn632-hover bn28">Salir</button></a>
                        
<style>.bn632-hover {
  width: 110px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 10px;
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
                    </td>
                    <td align="center">
                        <!--<a href="regadmin.php"><img src="../css/images/administrador.png"  height="70px" width="70px"></a>-->
                      
                       <a href="regadmin.php"><button class="bn33"><strong>Administrador</strong></button></a>
                    </td>
                </tr>
        </table>
    </center>

<style>.bn33 {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 18px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
  padding: 0.7em 2em;
  border-radius: 10px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}</style>
                        


                        <br><br>
                    

                    <div class="wrap-input100 validate-input">
                        

                        <?php 

                        include('../conexion.php');
                        



                        ?>
                        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Fecha</th>
            <th>Metros</th>
            <th>Pedido</th>
            
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $query = $link ->query('SELECT * FROM pedido')or die($link ->error);
            $query2 = mysqli_query($link,"SELECT * FROM pedido INNER JOIN usuario WHERE usuario.id_usuario = pedido.id_usuario ORDER BY fecha DESC");    
            



             while($rowquery = mysqli_fetch_array($query2)){
                    //if($cantidad >= 1){

                
                
            ?>
        <tr>
            <td><strong style="font-size: 15px"><?php echo $rowquery['usuario'];?></strong></td>
            <td><strong style="font-size: 15px"><?php echo $rowquery['fecha'];?> </strong></td>
            <td><strong style="font-size: 13px"><?php echo $rowquery['total'];?></strong></td>
            <td><a href="registros.php?id_pedido=<?php echo $rowquery['id_pedido']?>"> <img src="../css/images/carrito.png"  height="50px" width="50px"></td>
          
            <td><button onclick="location.href='#m5-o<?php echo $rowquery['id_pedido']?>'" type="button" data-toggle="modal" data-target="#m5-o<?php echo $rowquery['id_pedido'];?>"><img src="../css/images/cancelar.png" width="45px" height="  45px "></button>


         




            </td>
        </tr>

<?php include('ModalEliminar.php'); ?>


    <?php 


}?>
        
        <tbody>
    </table>
</div>
                        
                    </div>

                    
                
                    
                

            </div>

        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
    


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
    background: #E6E6E6;
}
.fl-table tr:nth-child(odd){
    background: #F5F6CE;
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
 height: 110px;
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
       document.querySelector('#id_ped').value = id;
      
        console.log('abrir modal');
        $('#m5-o').modal();
    });
});

</script>

<script type="text/javascript">
    $(document).ready(function() {

        


    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id_pedido");

        var dataString = 'id='+ id;
        url = "recib_delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="admin.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>

</body>
</html>