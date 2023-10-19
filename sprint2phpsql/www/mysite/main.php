<?php
	 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
<body>
	<h1>Conexión establecida</h1>
	<table border="1" align="justify">
		<tr>
			<th style="width:50px">ID</th>
			<th style="width:50px">NOMBRE</th>
			<th style="width:50px">APELLIDOS</th>
			<th style="width:230px">EMAIL</th>
			<th style="width:50px">CONTRASEÑA</th>
		</tr>
	</table>
	<?php
	//Lanzar una query
	$query = 'SELECT * FROM tusuarios';
	$result = mysqli_query($db, $query) or die('Query error');
	//Recorrer el resultado
	while ($row = mysqli_fetch_array($result)){
		echo '<table border="1" align="justify">';
			echo '<tr>';
				echo '<th style="width:50px"><a href="/detail.php?id=<id>">'.$row['id'].'</th>';
				echo '<th style="width:70px">'.$row['nombre']. '</th>';
				echo '<th style="width:95px">'.$row['apellidos']. '</th>';
				echo '<th style="width:230px">'.$row['email']. '</th>';
				echo '<th style="width:110px">'.$row['contraseña']. '</th>';
			echo '</tr>';
		echo '</table>';
	}
	ECHO '<br>';
	ECHO '<br>';
	?>
	<table border="1" align="justify">
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>IMAGEN</th>
			<th>AÑO DE CREACIÓN</th>
			<th>GÉNERO</th>
		</tr>
	
	<?php
	$query = 'SELECT * FROM tjuegos';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
			echo '<tr>';
				echo '<th><a href="/detail.php?id=<id>">'.$row['id'].'</th>';
				echo '<th>'.$row['nombre'].'</th>';
				echo '<th><img style="width:350px; height=250px" src="'.$row['url_imagen'].'"></th>';
				echo '<th>'.$row['ano_creacion'].'</th>';
				echo '<th>'.$row['genero'].'</th>';
			echo '</tr>';
	}
		echo '</table>';
	ECHO '<br>';
	ECHO '<br>';
	?>
	<table border="1" align="justify">
		<tr>
			<th>ID</th>
			<th>COMENTARIO</th>
			<th>ID DEL USUARIO</th>
			<th>ID DEL JUEGO</th>
		</tr>
	
	<?php
	$query = 'SELECT * FROM tcomentarios';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
			echo '<tr>';
				echo '<th><a href="/detail.php?id=<id>">'.$row['id'].'</th>';
				echo '<th>'.$row['comentario'].'</th>';
				echo '<th>'.$row['usuario_id'].'</th>';
				echo '<th>'.$row['juego_id'].'</th>';
			echo '</tr>';
	}
	echo '</table>';
	mysqli_close($db);
	?>


</body>
</html>
