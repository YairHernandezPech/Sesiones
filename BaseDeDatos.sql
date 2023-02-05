create database Login;

use Login;
 
create table usuarios(
 
id int not null auto_increment primary key,
 
usuario varchar(100) not null,

clave varchar(100) not null
 );

SELECT * FROM usuarios;
