<?php
session_start();
if(isset($_SESSION['rolSc'])){
    switch($_SESSION['rolSc']){
      case 1:
        header('location:../vistas/inicio_admin.php');
      break;
      case 2:
        header('location:../vistas/inicio_empleado.php');
      break;
      case 3:
        header('location:../vistas/inicio_medico.php');
      break;

      default:
    }
}

?>