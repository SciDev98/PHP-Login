

 <?php
include('db.php');
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];
$conexion=mysqli_connect("localhost","root","","login");

$insersion="insert into usuario(usuario,contraseña) VALUES('$usuario','$contraseña')";
$resultado=mysqli_query($conexion,$insersion);


mysqli_close($conexion);
