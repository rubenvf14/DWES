<?php
  $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
	<body>
	<?php
	session_start();
	$user_id_a_insertar = 'NULL';
	if(!empty($_SESSION['user_id'])){
		$user_id_a_insertar = $_SESSION['user_id'];
	}

	$juego_id = $_POST['juego_id'];
	$comentario = $_POST['new_comment'];

	$query = "INSERT INTO tcomentarios(comentario, usuario_id, juego_id) VALUES ('".$comentario."','".$user_id_a_insertar."','".$juego_id.")";

	mysqli_query($db, $query) or die('Error');

	echo "<p>Nuevo comentario ";
	echo mysqli_insert_id($db);
	echo " añadido</p>";
	echo "<a href='/detail.php?juego_id=".$juego_id."'>Volver</a>";
	mysqli_close($db);
	?>
</body>
</html>
