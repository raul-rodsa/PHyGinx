<html>
<head>
    <title>Formulario de verificacion</title>
    <style>
        body {
            background-color: #FFB15F;
            text-align: center;
        }
        img{
          align: center;
        }
    </style>
</head>
<body>
<?php
$servername = "mysql";
$username = "raul";
$password = "pedo";
$database = "usuarios";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, $database);

//Variables del formulario
$nombre = $_POST['nombre1'];
$contra = $_POST['contra'];

//Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}elseif ($conn){
  echo "Connected successfully <br/>";
}
//Consulta

$consulta= "SELECT * FROM gente where nombre = '$nombre'";
$resultado = mysqli_query($conn,$consulta);

//Array asociativo
$final = mysqli_fetch_assoc($resultado);

if ($nombre == $final['nombre'] && $contra == $final['passwd']){
echo "<h2>Bienvenido " . $final['nombre']."</h2><br/>";
echo "<img src='imagenes/naruto.gif'>";


}else{
  echo "Usuario o contraseña incorrectos.<br>";
  echo "<a href = 'formulario.php'>Volver a intentar</a>";
}
mysqli_close($conn);
?> 
</body>
</html>
