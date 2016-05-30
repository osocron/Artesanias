<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $idArtesano = $_GET['id'];
    $nombre = $_GET['nombre'];
    $region = $_GET['region'];
    $bio = $_GET['bio'];
    $direccion = $_GET['direccion'];
    $telefono = $_GET['telefono'];

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $connection = new mysqli($server, $username, $password, $db);

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