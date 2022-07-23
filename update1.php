<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "programacionnet") or
    die("Problemas con la conexión");
  $registros = mysqli_query($conexion, "select * from customers
                        where name='$_REQUEST[name]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>
    <form action="update2.php" method="post">
      Ingrese nuevo nombre:
      <input type="text" name="nombren" value="<?php echo $reg['name'] ?>">
      <br>
     
      <input type="hidden" name="nombrev" value="<?php echo $reg['name'] ?>">
      
    




<input type="submit" value="Modificar">
</form>
  <?php
  } else
    echo "No hay registro ";
  ?>
</body>
</html>
