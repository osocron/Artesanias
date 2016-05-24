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
<div id="search">
    <form action="consultaArtesanos.php" method="get">
        <input type="search" name="codigo"> <input type="submit" value="Buscar">
    </form>
</div>
<form action="registrarArtesano.php" method="get">
    <div id="table">
        <?php
        $connection = mysqli_connect("127.0.0.1", "artesanias", "artesanias", "artesanias");

        if (!$connection) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $query = "SELECT * FROM artesano";
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
                    echo "<td>" . $row['idArtesano'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['region'] . "</td>";
                    echo "<td>" . $row['bio'] . "</td>";
                    echo "<td>" . $row['direccion'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "</tr>";
                }
            }
            $result->free();
            $connection->close();
            ?>
            <tr>
                <td><input type="TEXT" name="id"></td>
                <td><input type="text" name="nombre"></td>
                <td><input type="text" name="region"></td>
                <td><input type="text" name="bio"></td>
                <td><input type="text" name="direccion"></td>
                <td><input type="text" name="telefono"></td>
            </tr>
        </table>
    </div>
    <div id="buttons">
        <input type="submit" value="agregar">
    </div>
</form>
<div id="footer">
    Este es el footer
</div>

</body>

</html>