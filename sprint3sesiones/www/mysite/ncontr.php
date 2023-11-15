<?php
  $db = mysqli_connect('localhost','root','1234','mysitedb') or die("Error");
  session_start();
  if(!empty($_SESSION['user_id'])){
	$id_user = $_SESSION['user_id'];
	$ant_contr = $_POST['ant_contr'];
	$nue_contr = $_POST['nue_contr'];
	$rep_contr = $_POST['rep_contr'];
	
	if($nue_contr != $rep_contr){
		echo "Las contraseñas no coinciden";
	} else{
	$contra_n = $db->prepare('SELECT contraseña FROM tusuarios WHERE id = ?');
	$contra_n -> bind_param('i',$id_user);
	$contra_n->execute();
	$result = $contra_n->get_result();
	$onlyRow = $result->fetch_row();

	if(password_verify($ant_contr, $onlyRow[0]) == 0){
		echo "La contraseña actual es incorrecta";
	}else{
	$contr = password_hash($nue_contr, PASSWORD_DEFAULT);
	$newQuery = $db->prepare('UPDATE tusuarios SET contraseña = ? WHERE id = ?');
	$newQuery-> bind_param('si', $contr, $id_user);
	$newQuery->execute();
	echo '<p>Contraseña updateada</p>';
	}
    }
}else{
	echo "Inicia sesión antes";
}
mysqli_close($db);
?>

