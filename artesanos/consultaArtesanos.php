<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $idArtesano = $_GET['codigo'];

    $connection = mysqli_connect("127.0.0.1", "artesanias", "artesanias", "artesanias");

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $query = "SELECT * FROM artesano WHERE idArtesano={$idArtesano}";

    ?>
    <html>
    <head>
        <title>Página artesanos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
    <div class="container">
	   <div class="container-fluid">
		<div class="row">
		
			<img src="../img/descarga.png" class="img-responsive">
		
	   	</div>
	   </div>
	   <div class="navbar navbar-inverse">
		    <div class="container-fluid">
			    <ul class="nav navbar-nav">
				<li><a href="#Artesanias">Artesanias</a></li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="artesanoPrincipal.php">Artesanos
				<span class="caret"></span></a>
				    <ul class="dropdown-menu">
					<li><a href="#ReporteArtesanos">ReporteArtesanos</a></li>
				    </ul>
				</li>
			    </ul>
		    </div>
	    </div>
	    <div class="text-right">
		    <form action="consultaArtesanos.php" method="get">
			<input type="search" name="codigo"> <input class="btn btn-info" type="submit" value="Buscar">
		    </form>
	    </div>
	    <div id="espacio-tabla">
		<br>
		<br>
	    </div>
	    <div id="table">
		<table class="table table-hover">
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

	    	 <div id="sigue-el-footer">
	<br><br><br>
        </div>
	<div class="panel-footer">Palacio de Gobierno. Av. Enríquez s/n. Col. Centro C.P. 91000, Xalapa, Veracruz, México.
Tel. (228) 841-7400. Algunos derechos reservados © 2013</div>
</div>	

    </body>

    </html>

    <?php
}

?>
