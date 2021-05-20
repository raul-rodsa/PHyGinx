<?php
session_start();

?>

<html>
<head>
    <title>Formulario de verificacion</title>
    <style>
        body {
            font-family: monospace;
            background-color: #DAF7A6 ;
            align: center;
        }
        .cuadro {
            background-color: #9aff50  ;
            position: relative;
            border-width:medium;
            border-style: solid;
            border-radius: 10px;
            width:50%;
            padding-bottom: 10px;
        }
        .div1 {
            
            position:relative;
            margin-top: 20px;
          
            
            
                
        }
        
      
    </style>
</head>
<body><center>
<div class="cuadro" ><h2>Introduce tus credenciales</h2>
<form action="datos.php" method="POST">
<table>
    <tr><th>Nombre: </th><td><input type="text" name="nombre1"></td></tr>
    <tr><th>Contraseña: </th><td><input type="password" name="contra"></td></tr><br/>
</table>

    <div class="div1"><input type="submit" value="Verificar"></br></div>
    
</form>
¿No tienes acceso? <a href="formu_registro.html">Regístrate aquí</a>
</div></center>
</body>
</html>
