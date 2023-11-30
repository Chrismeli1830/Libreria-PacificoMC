<?php
include ("../conx.php");//cobnecta el arcivo de la base de datos
$nombre = $_POST ['nombre'];       //----|
$ap = $_POST['apellido'];  //    |
$am = $_POST['email']; 
$insertar = "INSERT INTO cliente(nombre,apellidos,correo)
 VALUES('$nombre','$ap','$am')";//el primer parentesis es de los campos de la base de datos, y el segundo parentesis son las variables
$resultado = mysqli_query($conexion,$insertar) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Insercion coompletada');
window.location='/dul/dul/docs/index.php'</script>"; //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>