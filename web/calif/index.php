<?php
    include("db.php");
    $consulta="SELECT*FROM Alumnos";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Calificaciones</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/calif.css">
  </head>
  <body>
   <h1>Sistema de calificaciones</h1>
  
   <table class="calif">
    <tr>
      <th>N° Control</th>
      <th>Nombre</th>
      <th>Carrera</th>
      <th>Parcial 1</th>
      <th>Parcial 2</th>
    </tr>
<?php $resultado = mysql_query($conexion, $consulta);
      while($row=mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $row["nombre"];?></td>
        <td><?php echo $row["nombre"];?></td>
        <td><?php echo $row["nombre"];?></td>
        <td><?php echo $row["nombre"];?></td>
        <td><?php echo $row["nombre"];?></td>
     </tr>     
   </table>
  </body>
</html>
