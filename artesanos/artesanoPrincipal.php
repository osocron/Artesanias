<!DOCTYPE html>
<html>
<head>
    <title>Página artesanos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script src="../JQuery/jquery-1.12.4.js"></script>
<script src="../js/bootstrap.min.js"></script>
<div class ="container">
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
				<li><a href="artesanosPrincipal.php">Principal</a></li>
				<li><a href="#ReporteArtesanos">ReporteArtesanos</a></li>			
			    </ul>
			</li>
		    </ul>
		    <form class="navbar-form navbar-right" role="search" action="consultaArtesanos.php" method="get">
			    <div class="form-group">
			    <input type="search" class="form-control"  placeholder="ID Artesano" name="codigo"> 
			    </div>
			    <button type="submit" class="btn btn-info">Buscar</button>
	            </form>
	    </div>
	</div>
	<div id="siguen los botones">
		
	</div>
	<div class="row">
		<div class="text-left">
		    <div class="col-sm-4"> <button class="btn btn-danger"type="button">Eliminar</button> </div>		    
		    <div class="col-sm-4">
		   
		</div>
		 <div class="text-right">
		    <div class="col-sm-4"> <a href="seleccionEditar.php"><button class="btn btn-primary"type="button">Editar</button></a>
		    <a href="agregar.php"><button class="btn btn-success"type="button">Agregar</button></a> </div>
		 </div>
	</div>
	<div id="espacio-tabla">
		<br>
		<br>
		<br>
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
