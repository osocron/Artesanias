<!DOCTYPE html>
<html>
<head>
    <title>Página artesanos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<<<<<<< HEAD
<div class ="container">
	<div id="header">
	    Este es el header
	</div>
	<div id="nav">
	    <ul>
		<li><a href="#Artesanias">Artesanias</a></li>
		<li><a href="artesanosPrincipal.php">Artesanos</a>
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
	    </table>
	</div>
	<div id="buttons">
	    <button type="button">Eliminar</button>
	    <button type="button">Editar</button>
	    <a href="agregar.php"><button type="button">Agregar</button></a>
	</div>
	<div id="footer">
	    Este es el footer
	</div>
</div>	
=======
<div id="header">
    Este es el header
</div>
<div id="nav">
    <ul>
        <li><a href="#Artesanias">Artesanias</a></li>
        <li><a href="artesanosPrincipal.php">Artesanos</a>
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
    </table>
</div>
<div id="buttons">
    <a href="seleccionEliminar.php"><button type="button">Eliminar</button></a>
    <a href="seleccionEditar.php"><button type="button">Editar</button></a>
    <a href="agregar.php"><button type="button">Agregar</button></a>
</div>
<div id="footer">
    Este es el footer
</div>

>>>>>>> master
</body>

</html>
