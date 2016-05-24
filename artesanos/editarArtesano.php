<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $idArtesano = $_GET['id'];

    $connection = mysqli_connect("127.0.0.1", "artesanias", "artesanias", "artesanias");

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    ?>
    <html>
    <head>
        <title>Página artesanos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
    <div id="header">
        Este es el header
    </div>
    <div id="nav">
        <ul>
            <li><a href="#Artesanias">Artesanias</a></li>
            <li><a href="artesanoPrincipal.php">Artesanos</a>
                <ul>
                    <li><a href="#ReporteArtesanos">ReporteArtesanos</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <form action="actualizarArtesano.php" method="get">
        <div id="table">
            <?php
            $query = "SELECT * FROM artesano WHERE idArtesano='{$idArtesano}'";
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>REGION</th>
                    <th>BIOGRAFÍA</th>
                    <th>DIRECCIÓN</th>
                    <th>TELÉFONO</th>
                </tr>
                <?php
                if ($result = $connection->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><input type=\"hidden\" name=\"id\" value='{$idArtesano}'></td>";
                        echo "<td><input type=\"text\" name=\"nombre\" value='{$row['nombre']}'></td>";
                        echo "<td><input type=\"text\" name=\"region\" value='{$row['region']}'></td>";
                        echo "<td><input type=\"text\" name=\"bio\" value='{$row['bio']}'></td>";
                        echo "<td><input type=\"text\" name=\"direccion\" value='{$row['direccion']}'></td>";
                        echo "<td><input type=\"text\" name=\"telefono\" value='{$row['telefono']}'></td>";
                        echo "</tr>";
                    }
                }
                $result->free();
                $connection->close();
                ?>
            </table>
        </div>
        <div>
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
    <div id="footer">
        Este es el footer
    </div>

    </body>

    </html>
    <?php
}