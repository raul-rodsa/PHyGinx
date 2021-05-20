<?php
session_start();

?>
<html>
<head>
    <title>Formulario de verificacion</title>
    <style>
        body {
            background-color:  #ffef7c ;
            text-align: center;
        }
        img{
          align: center;
          border: solid;
          border-width:2px;
          border-radius:20px;
        }
        .titulo{
          
            position: relative;
            font-family: sans-serif;
            background-color: #bdff00;
            width:50%;
            margin-left: 25%;
            margin-bottom:30px;
            border:solid;
            border-radius:20px;
            border-width:2px;

        }
        input{
          position:relative;
          margin-top: 20px;
          background-color:#ff6969;
          border-radius:5px;
          color: white;
          border:solid;
          border-color:black;
          border-width:thin;

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
$nombre = $_POST['nombre1'];
$contra = $_POST['contra'];


/*Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}elseif ($conn){
  echo "Connected successfully <br/>";
}
*/


//Consulta

$consulta= "SELECT * FROM gente where nombre = '$nombre'";
$resultado = mysqli_query($conn,$consulta);

//Array asociativo
$final = mysqli_fetch_assoc($resultado);
$usuarioDB = $final['nombre'];
$contraDB = $final['passwd'];

//Verifico que la contraseña introducida coincide con el hash

$verificado = password_verify($contra,$contraDB);

//Comprobación del login: 

if($nombre == '' || $contra == ''){
  echo "Usuario o contraseña incorrectos.<br><br/>";
  echo "<a href = 'formulario.php'>Volver a intentar</a>";
  die();
  
}elseif ($nombre == $usuarioDB && $verificado ){

  $_SESSION['usuario'] = $usuarioDB;
  echo "<div class='titulo'> <h2>Bienvenido $usuarioDB </h2></div>";
?>

<img src='imagenes/naruto.gif'>
<br/>
<div class="csesion">
<form action="berga.php">
      <input type="Submit" value="Cerrar sesion">
</form></div>
<?php
}

mysqli_close($conn);
?> 
</body>
</html>
