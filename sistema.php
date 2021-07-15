<?php
session_start();

if((!isset($_SESSION['nome'])== true) and (!isset($_SESSION['senha']) ==true))
{
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: formulario.php');
}
$logado = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body{
            background: #555;
            color: white;
            text-align: center;
        }
        #leo{
            width: 30%;
        }
        .navbar{
            background-color: #557085;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
   <?php
        echo "<h1>Bem-Vindo <u>$logado<u></h1>";
   ?>
   <br>
   <section>
       <img id="leo" src="img/Leo.gif">
   </section>
</body>
</html>