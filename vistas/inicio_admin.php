<!-- Se construlle la pagina con todos sus componentes y se valida la sesion -->
<?php
session_start();

if(!isset($_SESSION['rolSc'])){
  header('location:../index.php');
}else{
  if($_SESSION['rolSc'] !=1){
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/local/inicio.css">

    

    <title>ADMINISTRADOR</title>
  </head>

  <div id="header">
      <?php 
      include "header.php";
      adminHeader(); 
      ?>
  </div>

  <body>

    <div id="main">
      <?php 
      include "main.php"; 
      adminMain();
      ?>
    </div>
    
    <div id="footer">
      <?php 
      include "footer.php";
      adminFooter(); 
      ?>
    </div>

  </body>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
</html>