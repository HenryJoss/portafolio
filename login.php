<?php 
session_start();
if($_POST){
    if(($_POST['usuario']=="develoteca")&&($_POST['contrasena']=="12345")){
        
        $_SESSION['usuario']="develoteca";

        header("location:index.php");

    }else{
        }
        echo "<script> alert('Usuario o contraseña incorrecta');</script>";
} ?>


 <!doctype html>
 <html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit=no"/>
 
        <!-- Bootstrap CSS v5.3.8 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
      
    </head>
 
    <body>

    <div class="container">

        <div class="row"> 
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <br/>
            <div class="card">
                <div class="card-header">Iniciar sesion</div>
                <div class="card-body">
                   <form action="login.php" method="post">

        Usuario:<input  class="form-control" name="usuario" id="">
        <br/>
        Contraseña:<input class="form-control" type="password" name="contrasena" id="">
        <br/>
        <button
            type="submit"
            class="btn btn-success"
        >
            Entrar al portafolio</button>
    </form>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>
            
                

            </div>
            <div class="col-md-4">

            </div>
        </div>
       
    </div>
    
        
</body>

 </html>
 