<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../../public/vista/Archivos/Tabla.css">
  <title>Gestión de usuarios</title>

</head>

<body>



  <div>
    <h1> Listado de Usuarios
    </h1>
    <table>
      <tr>
        <td>Codigo</td>
        <td>Cedula</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Dirección</td>
        <td>Telefono</td>
        <td>Correo</td>
        <td>Fecha Nacimiento</td>
        <td>Eliminar</td>
        <td>Modificar</td>
        <td>Cambiar contrasena</td>
        

      </tr>

  </div>

  <?php
  include '../../../config/conexionBD.php';
  $sql = "SELECT * FROM usuario WHERE usu_eliminado='N';";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["usu_codigo"] . "</td>";
      echo " <td>" . $row["usu_cedula"] . "</td>";
      echo " <td>" . $row['usu_nombres'] . "</td>";
      echo " <td>" . $row['usu_apellidos'] . "</td>";
      echo " <td>" . $row['usu_direccion'] . "</td>";
      echo " <td>" . $row['usu_telefono'] . "</td>";
      echo " <td>" . $row['usu_correo'] . "</td>";
      echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";


      if((string)$row["usu_eliminado"]==='N'){
        echo'<td><a href="../../controladores/delete.php?usu_cod='.$row["usu_codigo"].'&delete='.true.'">Eliminar</a></td>';
    }else{
        echo'<td><a href="../../controladores/delete.php?usu_cod='.$row["usu_codigo"].'">Activar</a></td>';
    }

    echo '<td><a href="../../controladores/Modificar.php?usu_codigo=' . $row['usu_codigo'] . '">Modificar Usuario</a></td>';


    echo '<td><a href="../../controladores/CambiarContra.php?usu_cod=' . $row["usu_codigo"] . '">Cambiar Contrasena</a></td>';
    echo "</tr>";
            }
  } else {
    echo "<tr>";
    echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
    echo "</tr>";
  }

  $conn->close();
  ?>
  </table>
</body>

</html>