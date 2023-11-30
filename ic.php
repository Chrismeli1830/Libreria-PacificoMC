<?php
include ("../conx.php");//cobnecta el arcivo de la base de datos
$nombre = $_POST ['email'];       //----|
$ap = $_POST['password'];   
$sql=$conexion->query("SELECT * FROM empleado WHERE correo_empleado = $nombre and contra = $ap ");
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Bienvenido');
window.location='/dul/dul/docs/perfil_resp.php'</script>"; //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>