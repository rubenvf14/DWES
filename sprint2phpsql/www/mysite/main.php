<?php
	 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
<body>
	<h1>Conexión establecida</h1>
	<?php
	//Lanzar una query
	$query = 'SELECT * FROM tusuarios';
	$result = mysqli_query($db, $query) or die('Query error');
	//Recorrer el resultado
	while ($row = mysqli_fetch_array($result)){
		echo '<table border="1" align="justify">';
				echo '<tr>';
					echo '<th>'.'<a href="/detail.php?id=<id>">'.'ID'.'</a>.</th>';
					echo '<th>NOMBRE</th>';
					echo '<th>APELLIDOS</th>';
					echo '<th>EMAIL</th>';
					echo '<th>CONTRASEÑA</th>';
				echo '</tr>';
			echo '<tr>';
				echo '<th>'.$row['id'].'</th>';
				echo '<th>'.$row['nombre']. '</th>';
				echo '<th>'.$row['apellidos']. '</th>';
				echo '<th>'.$row['email']. '</th>';
				echo '<th>'.$row['contraseña']. '</th>';
			echo '</tr>';
		echo '</table>';
	}
	ECHO '<br>';
	ECHO '<br>';
	$query = 'SELECT * FROM tjuegos';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
		echo '<table border="1" align="justify">';
			echo '<tr>';
				echo '<th>'.'<a href="/detail.php?id=<id>">'.'ID'.'</a>.</th>';
				echo '<th>NOMBRE</th>';
				echo '<th>URL_IMAGEN</th>';
				echo '<th>AÑO DE CREACIÓN</th>';
				echo '<th>GÉNERO</th>';
			echo '</tr>';
			echo '<tr>';
				echo '<th>'.$row['id'].'</th>';
				echo '<th>'.$row['nombre'].'</th>';
				echo '<th>'.$row['url_imagen'].'</th>';
				echo '<th>'.$row['ano_creacion'].'</th>';
				echo '<th>'.$row['genero'].'</th>';
			echo '</tr>';
		echo '</table>';
	}
	ECHO '<br>';
	ECHO '<br>';
	$query = 'SELECT * FROM tcomentarios';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
		echo '<table border="1" align="justify">';
			echo '<tr>';
				echo '<th>'.'<a href="/detail.php?id=<id>">'.'ID'.'</a>.</th>';
				echo '<th>COMENTARIO</th>';
				echo '<th>usuario_id</th>';
				echo '<th>libro_id</th>';
			echo '</tr>';
			echo '<tr>';
				echo '<th>'.$row['id'].'</th>';
				echo '<th>'.$row['comentario'].'</th>';
				echo '<th>'.$row['usuario_id'].'</th>';
				echo '<th>'.$row['juego_id'].'</th>';
			echo '</tr>';
		echo '</table>';
	}
	mysqli_close($db);
	?>


</body>
</html>
