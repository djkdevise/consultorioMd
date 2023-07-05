<!-- Se construlle la pagina con todos sus componentes y se valida la sesion -->
<?php
session_start();

if(!isset($_SESSION['rolSc'])){
  header('location:../index.php');
}else{
  if($_SESSION['rolSc'] !=2){
    header('location:../index.php');
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../dist/local/sesion.css"> -->

    <title>EMPLEADO</title>
  </head>
  <body>

  <div id="header">
      <?php 
      include "header.php";
      empleadoHeader(); 
      ?>
    </div>

    <div id="main">
      <?php 
      include "main.php"; 
      empleadoMain();
      ?>
    </div>
    
    <div id="footer">
      <?php 
      include "footer.php";
      empleadoFooter(); 
      ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>