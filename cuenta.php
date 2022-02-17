<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "rentcar";
$con = new mysqli($host, $user, $password, $db);

?>
<html>

<head>
    <title>Mi cuenta</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesCuenta.css">
</head>

<body>
    <?php include "php/navbar.php"; ?>
    <div class="a-box">
        <div class="img-container">
            <div class="img-inner">
                <div class="inner-skew">
                    <img src="./img/user.png">
                </div>
            </div>
        </div>
        <div class="text-container">

            <table class="tableta">
                <tr>
                    <td>NOMBRE</td>
                    <td>USUARIO</td>
                    <td>TIPO</td>
                </tr>
                <?php

                $sql = "SELECT * FROM usuarios";
                $resul = mysqli_query($con, $sql);

                while ($mortrar = mysqli_fetch_array($resul)) {
                ?>
                    <tr>
                        <td><?php echo $mortrar['nombre'] ?></td>
                        <td><?php echo $mortrar['usuario'] ?></td>
                        <td><?php echo $mortrar['tipo_usuario'] ?></td>
                    </tr>
                <?php
                }
                ?>
        </div>
</body>
</head>

</html>