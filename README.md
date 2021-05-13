# Proyecto final - PHyGinx
## Stack LEMP basado en docker-compose
Este es mi proyecto de fin de grado.  
Consiste en el despliegue de un stack __LEMP__ _(Servidor Nginx, MySQL, PHP y PHPMyAdmin para linux)_ totalmente funcional desde el minuto 1 mediante docker-compose.

## Instrucciones:
1. Clonar el repositorio en tu máquina Linux
2. Ir a la carpeta PHyGinx/imagenes/php y crear la imagen de php con:

         docker build -t nombre_imagen . 
         
Para que coincida con el nombre del _docker-compose.yml_, el nombre debe ser "_php_con_mysqli_ ", pero se puede cambiar dentro del _docker-compose.yml_ si deseamos otro.  

3. Ir al directorio **PHyGinx** y ejecutar 
        
        docker-compose up
        #Para levantarlo en segundo plano:
        docker-compose up -d
        
4. En la sección de mysql, configurar con las credenciales que elijas las variables de entorno para poder acceder a la base de datos :

         environment:
             MYSQL_DATABASE: 'base_de_datos'
             MYSQL_USER: 'usuario'
             MYSQL_PASSWORD: 'password'
             MYSQL_ROOT_PASSWORD: 'password'
             
   Por defecto estarán las mías
   
5. Ya estaría levantado todo el servidor. Según mi configuración:
      - El servidor web utilizará el puerto **8080**. 
      - PHPMyAdmin utilizará el puerto **8082**.
      - El nombre del servidor para ingresar en __PHPMyAdmin__ será __mysql__.
      - Para servir tus propias páginas simplemente tienes que meterlas en el directorio _code_.

6. Para pararlo simplemente hay que hacer *Ctrl + C* si no lo hemos iniciado en segundo plano. Si queremos detener el proceso en segundo plano sería desde el directorio **PHyGinx** ejecutando:

                  docker-compose stop

7. Si queremos eliminar los contenedores que hemos creado al levantar el docker-compose, ejecutaremos:

                  docker-compose down



### Observaciones: 
- Para cambiar el nombre del servidor:

    1. Ir al directorio __PHyGinx__, configurar el archivo *site.conf* y cambiar la directiva _server_name_.
    2. Después ir a _/etc/hosts_ y añadir el nombre que hayas puesto como nombre del servidor.
    
- Para cambiar los puertos por si ya tenemos alguno en uso, se mapean desde el docker-compose.yml en la sección puertos de cada servicio. Por ejemplo:

        web:
          image: nginx:latest
          ports:
              - "8080:80"
            ( - "puerto_host:puerto_contenedor" )



  Hay que tener cuidado con esto, porque si no, va a darnos un error bastante grave y no funcionará.
 

- Para introducir registros en la base de datos habría que ir a _PHPMyADMIN_, cuando cuando levantas PHyGinx por primera vez todo está vacío.

