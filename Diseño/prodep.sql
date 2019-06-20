CREATE DATABASE IF NOT EXISTS prodep;
use prodep;
 
create table if not exists docente(
doc_id int not null auto_increment,
doc_numeroPersonal int,
doc_nombre varchar(50),
doc_correo varchar(50),
PRIMARY KEY(doc_id)
)ENGINE=INNODB;

create table if not exists administrador(
adm_id int not null auto_increment,
adm_nombre varchar(50),
adm_correo varchar(50),
PRIMARY KEY(adm_id)
)ENGINE=INNODB;

create table if not exists director(
dir_id int not null auto_increment,
dir_nombre varchar(50),
dir_correo varchar(50),
primary key(dir_id)
)ENGINE=INNODB;

create table if not exists personal(
per_id int not null auto_increment,
per_nombre varchar(50),
per_correo varchar(50),

)ENGINE=INNODB;

