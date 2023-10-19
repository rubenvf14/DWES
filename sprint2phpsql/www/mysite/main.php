<?php
	 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
<body>
	<h1>Conexión establecida</h1>
	
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
				echo '<th><a href="/detail.php?id='.$row['id'].'">'.$row['id'].'</a></th>';
				echo '<th>'.$row['nombre'].'</th>';
				echo '<th><img style="width:350px; height=250px" src="'.$row['url_imagen'].'"></th>';
				echo '<th>'.$row['ano_creacion'].'</th>';
				echo '<th>'.$row['genero'].'</th>';
			echo '</tr>';
	}
		echo '</table>';
	
	mysqli_close($db);
	?>


</body>
</html>
