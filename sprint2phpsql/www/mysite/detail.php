<?php
  $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

<html>
<body>
<?php
	if(!isset($_GET['id'])){
	die('No se ha especificado un comentario');
	}
	$juego_id= $_GET['id'];
	$query = 'SELECT * FROM tjuegos WHERE id='.$juego_id;
	$result = mysqli_query($db, $query) or die('Query error');
	$only_row = mysqli_fetch_array($result);
	echo '<h1>'.$only_row['nombre'].'</h1>';
	echo '<img src="'.$only_row['url_imagen'].'"/>';
	echo '<h3>'.$only_row['ano_creacion'].'</h3>';
	echo '<h3>'.$only_row['genero'].'</h3>';
	?>
	<h3>Comentarios:</h3>
	<ul>
	<?php
	 $query2 = 'SELECT * FROM tcomentarios WHERE id='.$juego_id;
	 $result2 = mysqli_query($db, $query2) or die('Query error');
	while ($row = mysqli_fetch_array($result2)){
		echo '<li>'.$row['comentario'].'</li>';
	}
	mysqli_close($db);
	?>
	</ul>
</body>
</html>