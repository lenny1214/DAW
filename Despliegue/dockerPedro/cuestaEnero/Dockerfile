FROM php:7.4-apache

WORKDIR /var/www/html

# Copiar archivos de la aplicación al contenedor
COPY . .

# Instalar extensiones necesarias (puedes agregar otras según tus necesidades)
RUN docker-php-ext-install mysqli

# Cambiar el usuario y el grupo del servidor web a www-data
RUN chown -R www-data:www-data /var/www/html