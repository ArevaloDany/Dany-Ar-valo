<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <center>
    <h2>Blog</h2>
  </hr>
  <?php

session_start();
include('db.php');

$consulta= "SELECT * FROM  CONTENIDO ORDER BY fecha DESC ";

if($resultado=mysqli_query($conectar,$consulta)){

while ($registro=mysqly_fetch_assoc($resultado)) {

echo "<h3>" . $registro['titulo'] . "</h3>";

  echo "<h4>" . $registro['fecha'] . "</h4>";
  echo "<div style = 'width:400px'>" . $registro['comentario'] . "</div></br></br>";
  if($registro['imagen']=""){
echo "<img src='imagenes/" . $registro['imagen'] . "'width='300px'/>";




  }
  echo "<hr/>"
}

}


   ?>
 </center>
  </body>
</html>
