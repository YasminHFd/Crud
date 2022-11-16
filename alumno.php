<?php

$servername="localhost";
$username="root";
$password="";
$dbname="alumno";

if($_POST){

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$numero=$_POST['numero'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO datos (nombre, apellido, edad, numero)
  VALUES ('".$nombre."', '".$apellido."', '".$edad."', '".$numero."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<strong>EXITO</strong>";
  } else {
    echo "<strong>ERROR</strong>" . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>

<html>
    <head>
        <link rel="stylesheet" href="index.css"/>
        <title>Pagina alumno</title>
    </head>
    <body>

    <div class="insert">
    <form action="alumno.php" method="POST" class="aqui">
        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <br>
        Ingrese su apellido:
        <input type="text" name="apellido" placeholder="Ingrese su apellido">
        <br>
        Ingrese su edad: 
        <input type="text" name="correo" placeholder="Ingrese su edad">
        <br>
        Ingrese su numero de telefono:
        <input type="text" name="numero" placeholder="Ingrese su numero de telefono">
        <br>
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminar.php" target="_blank">SI</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificar.php" target="_blank">SI</a>
        
    </body>
</html>




    
