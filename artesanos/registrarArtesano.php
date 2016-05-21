<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $idArtesano = $_GET['id'];
    $nombre = $_GET['nombre'];
    $region = $_GET['region'];
    $bio = $_GET['bio'];
    $direccion = $_GET['direccion'];
    $telefono = $_GET['telefono'];

    $connection = mysqli_connect("127.0.0.1", "artesanias", "artesanias", "artesanias");

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $query = "INSERT INTO artesano VALUES('{$idArtesano}','{$nombre}','{$region}','{$direccion}','{$telefono}','{$bio}')";

    if ($connection->query($query) === TRUE) {
        header("Location: artesanosPrincipal.php");
    }
    else {

    }
    /* close connection */
    $connection->close();
}