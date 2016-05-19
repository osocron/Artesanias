<?php
/**
 * Created by IntelliJ IDEA.
 * User: osocron
 * Date: 5/19/16
 * Time: 10:07 AM
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    var_dump($_POST);
    
    $idArtesano = $_POST['codigo'];


    $connection = mysqli_connect("127.0.0.1", "artesanias", "artesanias", "artesanias");

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $query = "SELECT * FROM artesano WHERE idArtesano={$idArtesano}";

    if ($result = $connection->query($query)) {

        /* fetch object array */
        while ($row = $result->fetch_assoc()) {
            echo $row["nombre"];
            echo "\n";
            echo $row["bio"];
        }

        /* free result set */
        $result->free();
    }

    /* close connection */
    $connection->close();
}
else {
    echo "No hay respuesta";
}