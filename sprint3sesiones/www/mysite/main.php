<?php
	 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
<head>
<style>
	h1{
	color:#00A9FF;
	}

	.c1{
	background-color:#00A9FF;
	color: white;
	}

	.c2{
	background-color:#90EE90;
	color:black;
	}

</style>
</head>
<body>
	<h1>Conexión establecida</h1>
	
	<table border="1" align="justify">
		<tr>
			<th class="c1">ID</th>
			<th class="c1">NOMBRE</th>
			<th class="c1">IMAGEN</th>
			<th class="c1">AÑO DE CREACIÓN</th>
			<th class="c1">GÉNERO</th>
		</tr>
	<?php
	$query = 'SELECT * FROM tjuegos';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
			echo '<tr>';
				echo '<th class="c2"><a href="/detail.php?id='.$row['id'].'">'.$row['id'].'</a></th>';
				echo '<th class="c2">'.$row['nombre'].'</th>';
				echo '<th class="c2"><img style="width:350px; height=250px" src="'.$row['url_imagen'].'"></th>';
				echo '<th class="c2">'.$row['ano_creacion'].'</th>';
				echo '<th class="c2">'.$row['genero'].'</th>';
			echo '</tr>';
	}
		echo '</table>';
	
	mysqli_close($db);
	?>
	<a href="/logout.php">Desloguearse</a>

</body>
</html>
