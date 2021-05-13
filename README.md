# Proyecto
Proyecto de fin de grado 
Consiste en el despliegue de un stack LEMP (Servidor Nginx, MySQL, PHP y PHPMyAdmin para linux) totalmente funcional mediante docker-compose.

Instrucciones:
1. Clonar el repositorio en tu máquina Linux
2. Ir a la carpeta eneginx/imagenes/php y crear la imagen de php con "docker build -t nombre_imagen . ".
3. Ir al directorio principal y ejecutar "docker-compose up".
4. Ya estaría levantado todo el servidor.

Para cambiar los puertos por si ya tenemos alguno en uso, se haría desde el docker-compose.yml en la sección puertos (puerto_host:puerto_contenedor)
