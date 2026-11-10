docker --version: que Docker esté instalado.
docker ps: que el motor de Docker esté activo y nos muestra los contenedores en ejecución.
docker compose version: que tengamos disponible Docker Compose para administrar los servicios.

# levantar el contenedor
docker compose up -d

# a) Ver el log de MariaDB (busca "ready for connections")
docker compose logs mariadb

# b) Conectarte a MariaDB desde dentro de su contenedor
docker exec -it mariadb mariadb -u etl_user -p formularios_ares

# c) Entrar al contenedor de Python y verificar la versión
docker exec -it etl_python bash
python --version

# Cerrar 
docker compose stop

# comando para validar el compose
docker compose config


