drop database if exists prodep;
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
per_rol varchar(50),
primary key(per_id)
)ENGINE=INNODB;

create table if not exists usuario(
usu_id int primary key not null auto_increment,
usu_nombre varchar(70),
usu_contrasena varchar(70),
per_id int,
foreign key(per_id) references personal (per_id)
)ENGINE=INNODB;

create table if not exists areaEducativa(
are_id int not null auto_increment,
are_nombre varchar(50),
primary key(are_id)
)ENGINE=INNODB;

create table if not exists entidadEducativa(
ent_id int not null auto_increment,
ent_nombre varchar(80),
primary key(ent_id)
)ENGINE=INNODB;

create table if not exists region(
reg_id int not null auto_increment,
reg_nombre varchar(50),
primary key(reg_id)
)ENGINE=INNODB;

create  table if not exists convocatoria(
con_id int not null auto_increment,
con_nombre varchar(70),
primary key(con_id)
)ENGINE=INNODB;

create table if not exists destinatario(
des_id int not null auto_increment,
des_nombre varchar(50),
primary key(des_id)
)ENGINE=INNODB;

create table if not exists proyecto(
pro_id int not null auto_increment,
pro_claveProgramtica varchar(50),
pro_folioProdep varchar(50),
pro_oficioAutorizacion varchar(50),
pro_inicioApoyo date,
pro_estado bool,
pro_numeroDependencia int,
doc_id int,
foreign key(doc_id) references docente(doc_id),
adm_id int,
foreign key(adm_id) references administrador(adm_id),
dir_id int,
foreign key(dir_id) references director(dir_id),
ent_id int,
foreign key(ent_id) references entidadEducativa(ent_id),
per_id int,
foreign key(per_id) references personal(per_id),
are_id int,
foreign key(are_id) references areaEducativa (are_id),
reg_id int,
foreign key(reg_id) references region(reg_id),
con_id int,
foreign key(con_id) references convocatoria(con_id),
primary key(pro_id)
)ENGINE=INNODB;

create table if not exists oficio(
ofi_id int not null auto_increment,
ofi_numeroOficio int,
ofi_anoConvocatoria date,
ofi_folioProdep varchar(70),
ofi_asunto text,
ofi_monto varchar(40),
ofi_fechaEnvio date,
ofi_fechaRespuesta date,
ofi_aprobado bool,
des_id int,
foreign key(des_id) references destinatario(des_id),
doc_id int,
foreign key(doc_id) references docente(doc_id),
con_id int,
foreign key (con_id) references convocatoria(con_id),
pro_id int,
foreign key(pro_id) references proyecto(pro_id),
primary key(ofi_id)
)ENGINE=INNODB;

create table if not exists becario(
bec_id int not null auto_increment,
bec_nombre varchar(70),
bec_fechaInscripcion varchar(70),
primary key(bec_id)
)ENGINE=INNODB;

create table if not exists registroConvocatoria(
reg_id int not null auto_increment,
reg_anoConvocatoria date,
reg_estado bool,
reg_fechaVoBo date,
pro_id int,
foreign key(pro_id) references proyecto(pro_id),
bec_id int,
foreign key(bec_id) references becario(bec_id),
primary key(reg_id)
)ENGINE=INNODB;

create table if not exists documento(
doc_id int not null auto_increment,
doc_nombre varchar(70),
doc_estado bool,
reg_id int,
foreign key(reg_id) references registroConvocatoria(reg_id),
primary key(doc_id)
)ENGINE=INNODB;