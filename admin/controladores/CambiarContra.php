<?php
session_start();
if (!$_SESSION['isLogged']) {
    header("Location: ../../public/controladores/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica Hipermedial</title>
    <link rel="stylesheet" href="../../public/vista/archivos/Pagina.css"> 
    <link rel="stylesheet" href=""> 
</head>

<body>
<header>
        <!--Menu de Navegacion-->
        <div >
            <nav>
                <ul>
                 
                  <li><a href="../vista/usuario/index.php">Modificar</a></li>
                  <li><a href="">Cerrar Seccion</a></li>
                </ul>
            </nav>
    
        </div>
    
    </header>
    <br>
    <br>
    <br>
    
    <form action="CambiarContra2.php?usu_cod=<?php $cod=$_GET["usu_cod"]; echo($cod);?>" method="POST" id="contenido">
        <h2> Cambiar contraseña</h2>


        <input type="password" name="actual" placeholder="Actual" required>
        <input type="password" name="nueva" placeholder="Nueva Contrasena"  required>
        <input type="password" name="repnueva" placeholder="Repetir contrasena nueva"  required>
     


        <input id="boton" type="submit" value="Guardar Cambios" required>
        <!-- <input type="reset" id="cancelar" name="cancelar" value="Cancelar" /> -->


    </form>

</body>

</html>