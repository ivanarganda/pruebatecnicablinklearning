# Detalles aplicación

* Autor: Iván González Valles
* Fecha: 21/02/2024
* Descripción: prueba técnica para el puesto de FullStack BlinkLearning

# Pasos de la instalación

Instalar wampserver: [wampserver3.3.2](https://www.wampserver.com/en/download-wampserver-64bits/#wampserver-64-bits-php-5-6-25-php-7)

Asegurate de tener instalado: 

* Los paquetes VC C++. En caso de que no, instalalo cada uno: [paquetes](https://drive.google.com/drive/folders/1j2gBEXwMIFMVMLKtxvC6rdr3Ne8hJK6N)
* Las DLLs necesarias que son ficheros del sistema de Windows que estan en la carpeta C:/Windows/System32 : [dlls](https://drive.google.com/drive/folders/1LtoCG-D_0xqS8bh83A_EQwyPLe7tSMX7)

Una vez instalado wampserver asegurate de tener la version de PHP correspondiente
**OPCIONAL: tener node version ^18 o superior instalado para la instalar mas adelante los paquetes de node por si quieres probar el codigo de react y su entorno.**

# Configuracion de php

Para que funcione el controlador de rutas que tengo implementado en el root de la aplicación **routeController.php**: 
* Hay que poner en On un parametro del fichero de configuracion de php.ini que esta en **C:/wamp64/www/bin/php/laVersion/php.ini** 
* Tanto __allow_url_open__ y __allow_url_include__ en On.
* Reiniciamos el servidor en la esquina inferior derecha en la flecha > icono en verde > Restart all services

# Despliegue de la aplicación

* Nos vamos al repositorio
* Descargarlo en ZIP y lo descomprimimos
* Lo copiamos todo en la carpeta wwww **(reemplazamos lo que tenga dentro antes)**
* Escribimos en la url de arriba del navegador localhost **(en caso de que no tengamos mas archivos sino deberiamos navegar hasta encontrar el archivo que hayamos renombrado)**

> Espero que le haya resultado útil gracias
