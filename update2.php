<html>
<head>
    <title>actualizar</title>
</head>
<body>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $conexion = mysqli_connect("localhost", "root", "", "programacionnet") or
        die("Problemas con la conexión");
    mysqli_query($conexion, "update customers
                          set name='$_REQUEST[nombren]' 
                        where name='$_REQUEST[nombrev]'
                    
                       ") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El usuario fue modificado con exito";}
    ?>
</body>
</html>
