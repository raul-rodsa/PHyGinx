<?php
if (empty($_POST['nombre']) && empty($_POST['contra'])){
  header("Location:formulario.php");
}

?>
<html>
<head>
    <title>Formulario de verificacion</title>
    <style>
        body {
            background-color: #ffef7c ;
            text-align: center;
        }
        img{
          align: center;
        }
    </style>
</head>
<body>
<?php
//Comenzamos la sesión:

//Definimos las variables de la base de datos
$servername = "mysql";
$username = "raul";
$password = "pedo";
$database = "usuarios";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, $database);

//Variables del formulario
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];

/*Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}elseif ($conn){
  echo "Connected successfully <br/>";
} */

//Encriptamos la contraseña:
$hash = password_hash($contra, PASSWORD_BCRYPT);

//Inserción de datos

$insercion= "INSERT INTO gente(nombre, passwd) VALUES ('$nombre','$hash')";
mysqli_query($conn,$insercion);
echo "<br/>";
//Consulta
$consulta ="SELECT * FROM gente WHERE nombre = '$nombre'";
$resultado = mysqli_query($conn,$consulta);
$final= mysqli_fetch_assoc($resultado);

if( $final['nombre']){
echo "<br/>" .$final['nombre'].  " registrado con éxito";
}

mysqli_close();
?>
<br/><a href = "formulario.php">Volver</a>
</body>
</html>