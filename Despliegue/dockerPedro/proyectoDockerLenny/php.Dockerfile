# Dockerfile
# Usa la imagen oficial de PHP con Apache como base
FROM php:7.4-apache


# Establece el directorio de trabajo en el servidor web
WORKDIR /var/www/html

# Instala el controlador MySQL para PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia los archivos de tu aplicación al contenedor
COPY ./ /var/www/html


RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# Expone el puerto 80 para el tráfico web
EXPOSE 80

