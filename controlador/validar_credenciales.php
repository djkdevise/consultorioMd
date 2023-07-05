<?php
include('../modelo/database.php');

if(isset($_POST['user']) && isset($_POST['pass'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $db = new DataBase();

    $connect = $db->conexion(); // Establecer la conexión con la base de datos
    
    $query = $connect->prepare("SELECT * FROM Usuarios WHERE usuNombre = '$username'");  
    // AND usuPassword = '$password' 
    $query->execute();

    $existe = $query->rowCount();

    $row = $query->fetch(PDO::FETCH_NUM);

    if($existe == 1){
      $passwordBD = $row[2];
      // validar contraseña
      if(password_verify($password,$passwordBD)){
        // almacenar el usuario en la sesion
        session_start();
        $user_Sc = $row[1];
        $_SESSION['usuarioSc']= $user_Sc;

        // almacenar rol
        $rol_Sc = $row[4];
        $_SESSION['rolSc']= $rol_Sc;  
        
        // validar rol
        header("location:validar_rol.php");
        exit; 
      }else{
        // contraseña incorrecta
        header("location:../index.php");
        exit;
      }


    }else{
      // usuario no registrado o datos invalidos
      // regresar a iniciar sesion
      header("location:../index.php");
      exit;
    }
  }

?>