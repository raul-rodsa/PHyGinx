# Proyecto final - PhyGinx
## Stack LEMP basado en docker-compose
Proyecto de fin de grado.
Consiste en el despliegue de un stack LEMP (Servidor Nginx, MySQL, PHP y PHPMyAdmin para linux) totalmente funcional desde el minuto 1 mediante docker-compose.

Instrucciones:

1. Clonar el repositorio en tu máquina Linux
2. Ir a la carpeta PhyGinx/imagenes/php y crear la imagen de php con:

         docker build -t nombre_imagen . 
         
4. Ir al directorio principal y ejecutar 
        
        docker-compose up
        
6. Ya estaría levantado todo el servidor.


### Observaciones: 
- Para cambiar el nombre del servidor:

    - 1.Ir a la carpeta principal, configurar el archivo *site.conf* y cambiar la directiva servername.
    - 2.Ir a /etc/hosts y añadir el nombre que hayas puesto como nombre del servidor.
    
- Para cambiar los puertos por si ya tenemos alguno en uso, se mapean desde el docker-compose.yml en la sección puertos de cada servicio. Por ejemplo:

        web:
          image: nginx:latest
          ports:
              - "8080:80"
            ( - "puerto_host:puerto_contenedor" )



  Hay que tener cuidado con esto, porque si no va a dar un error bastante grave y no funcionará.
  
- Para introducir registros en la base de datos habría que ir a phpmyadmin, cuando cuando levantas PhyGinx por primera vez todo está vacío.
