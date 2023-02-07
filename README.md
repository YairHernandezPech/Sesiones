## Sesiones y Usuarios with PHP and MySQL

#### Página principal
[![principal](https://i.postimg.cc/QCXM8P05/screencapture-localhost-PHP-Login-index-html-2023-02-05-10-01-16.png "principal")](https://i.postimg.cc/QCXM8P05/screencapture-localhost-PHP-Login-index-html-2023-02-05-10-01-16.png "principal")
#### Página Registrarse
[![Regis](https://i.postimg.cc/rmy6Kk28/screencapture-localhost-PHP-Login-sesiones-php-2023-02-05-10-08-20.png "Regis")](https://i.postimg.cc/rmy6Kk28/screencapture-localhost-PHP-Login-sesiones-php-2023-02-05-10-08-20.png "Regis")
#### Página sólo para registrados
###### como se puede notar con el nombre de usuario que te registraste aparecerá con un Bienvenido
[![inicio](https://i.postimg.cc/D0BZqk4B/screencapture-localhost-PHP-Login-test-php-2023-02-05-10-10-36.png "inicio")](https://i.postimg.cc/D0BZqk4B/screencapture-localhost-PHP-Login-test-php-2023-02-05-10-10-36.png "inicio")
##### Nota:
###### Una vez que le des al boton salir y deseas entrar por medio de la url no podrás acceder tienes que volver a iniciar sesión/log in 
#### Página Log in
[![log in](https://i.postimg.cc/pr2rhXrm/screencapture-localhost-PHP-Login-sesiones-php-2023-02-05-10-11-53.png "log in")](https://i.postimg.cc/pr2rhXrm/screencapture-localhost-PHP-Login-sesiones-php-2023-02-05-10-11-53.png "log in")
#### Con esta paginá tu password es seguro ya que es un password Encriptado.Este se guarda en la base de datos con simbolos y letras que no podran ser desencriptadas por usuarios malisiosos al menos que se sepan la contraseña correcta puesta por el usuario registrado
###### Como se puede observar en la imagen. El cuadro azul seleccionado es como se vera tu contraseña ya que es un password Encriptado
[![seguro](https://i.postimg.cc/gJ21nCdY/base.png "seguro")](https://i.postimg.cc/gJ21nCdY/base.png "seguro")

# Para poder hacer uso de esta paginá sigue los siguientes pasos
###Paso 1
#### Dirijete al archivo db.php y cambias el $hostname por el host que utilizas en este caso yo utilizo el 3307
```php
$hostname = "localhost:3307";
```
###Paso 2
#### Dirijete a la carpeta logica,archivo conexion.php y cambias el $host por el host que utilizas en este caso yo utilizo el 3307
```php
$host = "localhost:3307";
```
###Paso 3
#### En tu base de datos MySQL cree la siguiente base de datos y tabla
```sql
create database Login;

use Login;
 
create table usuarios(
 
id int not null auto_increment primary key,
 
usuario varchar(100) not null,

clave varchar(100) not null
 );

SELECT * FROM usuarios;
```
