<?php 

session_start();
sleep(1);
if($_SESSION['user']){
  session_destroy();
  header("Location:index.php");
}else{
  header("Location:index.php");
}
?>