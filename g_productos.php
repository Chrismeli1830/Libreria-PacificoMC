<?php
include ("../conx.php");//cobnecta el arcivo de la base de datos
$nombre = $_POST ['nombre_producto'];       //----|
$pp = $_POST['precio_producto'];  //    |
$c = $_POST['categoria'];            //    |
$marca = $_POST['marca'];            //    |-variables, los que estan dentor de [] son los nimbres de los intput
$cant = $_POST['cantidad'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));  //    |
$insertar = "INSERT INTO producto(nombre,precio,categoria,marca,cantidad,foto_producto)
 VALUES('$nombre','$pp','$c','$marca','$cant','$foto')";//el primer parentesis es de los campos de la base de datos, y el segundo parentesis son las variables
$resultado = mysqli_query($conexion,$insertar) ; //el query hace la coconecta la base de datos
mysqli_close($conexion); //cierra la conexion de la base de datos
echo "<script>alert('Insercion coompletada');
window.location='/dul/dul/docs/index.php'</script>"; //estas dos lineas mandan una alerta que diga que la base de datos recibio los datos correctamente
?>