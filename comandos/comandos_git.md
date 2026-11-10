# Comandos git

gis status --short: comando para ver archivos pendientes con su correspondiente direccion


# solo para ver los nombres de los documentos dentro de add
git diff --cached --name-only

# verificar errores 
git diff --cached --check

# verificar tamaño del cambio
git diff --cached --stat

# archivos con seguimiento
git ls-files