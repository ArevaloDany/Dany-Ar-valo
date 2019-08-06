<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>blog</title>
  </head>
  <body>




<?php
session_start();
include('db.php');

if ($_files['imagen']["error"]){


echo "no se ha enviado ningun archivo";

  break;

  } else {
  echo "envio de archivo exitoso</br>"


$dir='imagenes/';

    move_uploaded_file($_files['imagen']['tmp_name']), $dir . $_files['imagen']['name'];
    echo "El archivo" . $_files['imagen']['name']; . "se ha copiado en el directorio de imagen";



  }else {
    echo "Error al subir el archivo";
  }
}

$titulo=$_POST['campo_titulo'];
$fecha=date("Y-m-d")
$comentario=$_POST['area_comentarios'];
$imagen=$_files['imagen']['name'];

$consulta="INSERT INTO CONTENIDO(titulo,fecha,comentario,imagen) values('" . $titulo . "','" . $fecha . "','" . $comentario . "','" . $imagen . "')";


$resultado=mysqli_query($conectar,$consulta);
// se cierra la conexion

mysqli_close($conectar);

echo "</br> se ha agregado el comentario con exito.</br></br>";


 ?>
  </body>
</html>
