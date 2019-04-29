<?php
 session_start();
 include '../../config/conexionBD.php';


 $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password =MD5('$contrasena')";



 $result = $conn->query($sql);

 
                if(isset($_SESSION['nombre'])){
                    echo"<p>Administrador: <span>".$_SESSION['nombre']."</span></p>";
                  
                    header("Location: ../../admin/vista/usuario/index.php");
                }else{
                    echo"<a href='login.php'>Iniciar Sesion</a>";
                }

 $conn->close();


?>
