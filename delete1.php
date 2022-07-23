<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "programacionnet") or
    die("Problemas con la conexión");
  $registros = mysqli_query($conexion, "select name from customers
                        where name='$_REQUEST[name]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from customers where name='$_REQUEST[name]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del usuario.";
  } else {
    echo "No existe ese usuario.";
  }
  mysqli_close($conexion);
  ?>
</body>
</html>
