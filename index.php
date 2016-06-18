<?php 
  session_start();
  include("conexion.php");
  if($_POST){
      $user=$_POST["usuario"];
      $pass=$_POST["pass"];
      $password="celc";
      $iniciar =mysql_query("SELECT * FROM docentes WHERE usuario ='$user'");
      $query = mysql_fetch_array($iniciar);
      $conteo = mysql_numrows($iniciar);

      if($user=="Admin"){
        if($pass == $password){
          $_SESSION['logeado']= "ok";
          $_SESSION['admin']= "si";
          $_SESSION['usuario'] =$user;
          //mysql_close($close);
          header("Location:alumnos.php");
          die();
        }
        else
        {
        echo "<script> alert('Contraseña incorrecta'); </script>";
        }
      }

      
   }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Clinica farmacia</title>
        <link rel="stylesheet" href="css/log.css">
  </head>
  <body>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <form method="POST">
        <h1 id="signup" style="background-color: #1172E2; background-position: initial initial; background-repeat: initial initial;">Login</h1>
        <input id="name" name="usuario" placeholder="Usuario" style="opacity: 5; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <input id="pass" type="password" placeholder="Contraseña" style="opacity: 5; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <button id="signupb">Entrar</button>
        </form>
    </div>
</div>
    
  </body>
</html>
