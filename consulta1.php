<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "programacionnet") or
    die("Problemas con la conexión");
  $registros = mysqli_query($conexion, "select name,email,contraseña,address
                        from customers where name='$_REQUEST[name]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre:" . $reg['name'] . "<br>";
    echo "correo:"    .$reg['email'] . "<br>";
    echo "contraseña:" . $reg['contraseña'] ."<br>";
        echo "direccion:" . $reg['address'] ."<br>";
    echo "telefono:" . $reg['phone'] ."<br>";
  }
  mysqli_close($conexion);
  ?>
</body>
</html>
