<?php
  $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<body>
	if(!isset($_GET['comentario'])){
	die('No se ha especificado una cancion');
	}
	$comentario= $_GET['comentario'];
	$query = 'SELECT * FROM tcomentarios WHERE id='.$comentario;
	$result = mysqli_query($db, $query) or die('Query error');
	$only_row = mysqli_fetch_array($result);
	echo '<h1>'.$only_row['comentario'].'</h1>';
	echo '<h2>'.$only_row['id'].'</h2>';
	echo '<h3>'.$only_row['usuario_id'].'</h3>';
	echo '<h3>'.$only_row['juego_id'].'</h3>';
	?>
	<h3>Comentarios:</h3>
	<ul>
	<?php
	 $query2 = 'SELECT * FROM tcomentarios WHERE comentario='.$comentario;
	 $result2 = mysqli_query($db, $query2) or die('Query error');
	while ($row = mysqli_fetch_array($result2)){
		echo '<li>'.$row['comentario'].'</li>';
	}
	mysqli_close($db);
	?>
	</ul>
</body>
</html>
