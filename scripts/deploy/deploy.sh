#!/bin/bash

# Define a timestamp function
timestamp() {
  date +%s
}

# Introduzca la rama a descargar
echo Introduzca la rama desde donde desea desplegar el código: \(master\)

read git_repo_branch

if [[ $git_repo_branch == "" || $git_repo_branch == null ]]; then
	git_repo_branch="master"
fi

# Introduzca el nombre de la carpeta actual donde tiene desplegado el anuario
echo Introduzca el nombre de la carpeta actual donde tiene desplegado el anuario: \(web\)

read deploy_folder

if [[ $deploy_folder == "" || $deploy_folder == null ]]; then
	deploy_folder="web"
fi

# Descargar el código del repositorio de GIT
echo Descargando código del repositorio \"https://github.com/sao-albacete/aoa\"...
git clone --branch $git_repo_branch https://github.com/sao-albacete/aoa.git $deploy_folder-new

# Copiar contenido de la carpeta app/webroot/img/users al nuevo despliegue
echo Copiando contenido de la carpeta app/webroot/img/users al nuevo despliegue...
cp -r $deploy_folder/app/webroot/img/users/ $deploy_folder-new/app/webroot/img/

# Copiar fichero app/Config/core.php al nuevo despliegue
echo Copiando fichero app/Config/core.php al nuevo despliegue...
cp $deploy_folder/app/Config/core.php $deploy_folder-new/app/Config/core.php

# Copiar fichero app/Config/database.php al nuevo despliegue
echo Copiando fichero app/Config/database.php al nuevo despliegue...
cp $deploy_folder/app/Config/database.php $deploy_folder-new/app/Config/database.php

# Copiar fichero app/Config/email.php al nuevo despliegue
echo Copiando fichero app/Config/email.php al nuevo despliegue...
cp $deploy_folder/app/Config/email.php $deploy_folder-new/app/Config/email.php

# Copiar el directorio /tmp
echo Copiando directorio app/tmp...
cp -r $deploy_folder/app/tmp/ $deploy_folder-new/app/

# Cambiando permisos de la carpeta del nuevo despliegue
echo Cambiando permisos de la carpeta del nuevo despliegue...
chmod -R 775 $deploy_folder-new

# Cambiando propietarios de la carpeta del nuevo despliegue
echo Cambiando propietarios de la carpeta del nuevo despliegue...
chown -R www-data:"$USER" $deploy_folder-new

# Renombrar despliegue actual a modo de backup
echo Renombrando despliegue actual a modo de backup...
mv $deploy_folder "${deploy_folder}_backup_$(timestamp)"

# Renombrar nuevo despliegue a despliegue oficial
echo Renombrando nuevo despliegue a despliegue oficial...
mv $deploy_folder-new $deploy_folder

# Generando version desplegada
echo Generando versión desplegada...
cd $deploy_folder
git describe --tags --long >> version.txt

echo Proceso finalizado con éxito.
