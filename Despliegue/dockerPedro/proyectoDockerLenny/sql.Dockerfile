# Usa la imagen oficial de MySQL
FROM mysql:latest

# Establece el directorio de trabajo en /docker-entrypoint-initdb.d
WORKDIR /docker-entrypoint-initdb.d

# Copia el script SQL al directorio de trabajo
COPY testdocker.sql .


# Expone el puerto de MySQL (opcional, dependiendo de tus necesidades)
EXPOSE 3306




