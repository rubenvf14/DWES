<?php
  $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
	<body>
<?php
  
  $nom_Usuario = $_POST['nombre'];
  $apel_Usuario = $_POST['apellidos'];
  $email_posted = $_POST['email'];
  $password1 = $_POST['contraseña1'];
  $password2 = $_POST['contraseña2'];
  if($password1 != $password2){
	die('Una de las contraseñas es diferente');
  }
  $password_hasheado =  password_hash($password1, PASSWORD_DEFAULT);
  $emails = "SELECT email from tusuarios";
  $result = mysqli_query($db, $emails) or die ('Query error');
  while($row==mysqli_fetch_array($result)){
  if($row[0] == $emails){
	die('El email introducido está repetido');
  	}
  }

  //INYECCIONES SQL
  $comprobacion=$db -> prepare("INSERT INTO tusuarios(nombre,apellidos,email,contraseña) VALUES (?,?,?,?)");
  $comprobacion->bind_param("ssss",$nom_Usuario,$apel_Usuario,$email_posted,$password_hasheado);
  $comprobacion->execute();
  echo '<h1>El usuario ha sido registrado</h1>';
  echo '<a href="register.html">Volver</a>';
  $comprobacion->close();
  //FIN
  mysqli_close($db);
?>

	</body>
</html>

