# M09 - Aplicacions Web
## Escola Del Treball
### 2HISX 2021-2022
### Aaron Andal

# Requisitos necesarios

`LAMP`

*Debian*

https://chachocool.com/como-instalar-lamp-en-debian-11-bullseye/

*Ubuntu*

https://noviello.it/es/como-instalar-lamp-apache-mysql-php-en-ubuntu-20-04-lts/ 

https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-es

# HTML

# PHP

PHP es uno de los lenguajes script de servidor más utilizados.

PHP (Hypertect Preprocessor) - Es un lenguaje de script y de propósito general.

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Exemple</title>
    </head>
    <body>
        <?php 
            echo "hola, sóc un script de PHP!";
        ?>
    </body>

</html>
```

En una página *HTML Dinámica*, se incrusta un código *Script PHP*.

El código PHP muestra un echo y empieza con `<?php` y termina con `?>`. Todo dentro de `<body>` en HTML.

3 campos principales que usan PHP.

* **Scripts de SERVIDOR**: Requieres un `servidor WEB` y un `navegador WEB`. Es necesario ejecutar el servidor con una `instalación PHP`. Se accede al programa PHP con un navegador web.

* **Scripts desde CLI**: Requires un intérprete de PHP.

* **Aplicaciones de escritorio**: No es muy recomendable usar PHP para crear aplicaciones de Escritorio con Gráfico.

## Instalación PHP

```
sudo apt-get update
```


```
sudo apt-get install php8.0 libapache2-mod-php8.0 php8.0-common php8.0-cli
```

* **php8.0**: Paquete básico.

* **libapache2-mod-php8.0**: Librerias y dependencias.

* **php8.0-common**: Documentación y ejemplos comunes.

* **php8.0-cli**: CLI.


> Reiniciar el APACHE2

```
sudo service apache2 restart
```

> Comprobar la versión

```
php -v
```

> La ruta por defecto es al Servidor Apache `/var/www/html`.