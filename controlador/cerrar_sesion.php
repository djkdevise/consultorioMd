<?php
extract ($_REQUEST);
session_start();
if(isset($_REQUEST['cerrar'])){
  $_SESSION['usuarioSc'] = NULL;
  $_SESSION['rolSc'] = NULL;
  
  session_unset();

  session_destroy();

  header("location:../index.php");
}

?>