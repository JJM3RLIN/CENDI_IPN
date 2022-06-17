DROP DATABASE IF EXISTS cendi;

CREATE DATABASE cendi;
USE cendi;

CREATE TABLE usuario(
username varchar(10) not null,
password varchar(16) not null,
id int not null auto_increment,
PRIMARY KEY (id)
);

CREATE TABLE derechoHabiente (
foto VARCHAR(30),
apellidoP varchar(20) not null,
apellidoM varchar(20) not null,
nombre varchar(50) not null,
domicilio varchar(60) not null,
entidadFederativa VARCHAR(20) not null,
municipio VARCHAR(50) not null,
cp VARCHAR(5) not null,
correo varchar(70) not null,
tel_f VARCHAR(10) not null,
tel_c VARCHAR(10) not null,
ocupacion varchar(20) not null,
curp varchar(18) not null,
puesto varchar(20) not null,
sueldo VARCHAR(10) not null,
nEmpleado VARCHAR(10) not null,
adscripcion varchar(10) not null,
horarioTrabajo varchar(20) not null,
extencion VARCHAR(6) not null,
PRIMARY KEY(curp)
);

CREATE TABLE child (
foto VARCHAR(30),
cendi VARCHAR(20) not null,
boleta VARCHAR(10) not null,
grupo VARCHAR(20) not null,
apellidoP varchar(10) not null,
apellidoM varchar(10) not null,
nombre varchar(70) not null,
fechaNacimiento VARCHAR(20) not null,
edad VARCHAR(3) not null,
curp varchar(18) not null,
curpD varchar(18) not null,
PRIMARY KEY (curp),
CONSTRAINT fk_curpD 
FOREIGN KEY(curpD) REFERENCES derechoHabiente (curp)
);

CREATE TABLE conyu (
foto VARCHAR(30),
apellidoP varchar(10),
apellidoM varchar(10),
nombre varchar(70),
domicilio varchar(60),
entidadFederativa VARCHAR(20),
municipio VARCHAR(50),
cp VARCHAR(5),
domicilioTrabajo VARCHAR(60),
telefono VARCHAR(10),
telTrabajo VARCHAR(10),
lugarTrabajo varchar(60),
extencion VARCHAR(5),
curpD varchar(18),
PRIMARY KEY(nombre, curpD),
CONSTRAINT fk_curpDC
FOREIGN KEY (curpD) REFERENCES derechoHabiente(curp)
);

CREATE TABLE grupos(
nombre VARCHAR(20),
cupo INT(2),
PRIMARY KEY(nombre)
);
CREATE TABLE horariosLACIYLACII(
id INT(10) NOT NULL AUTO_INCREMENT,
hora VARCHAR(6),
PRIMARY KEY(id)
);
CREATE TABLE horariosOtros(
id INT(10) NOT NULL AUTO_INCREMENT,
hora VARCHAR(6),
PRIMARY KEY(id)
);
INSERT INTO usuario(username,password) VALUES('admin','1234');

INSERT INTO grupos VALUES 
("LAC I",10),
("LAC II",10),
("LAC III",10),
("MAT I",12),
("MAT IIA",15),
("PIA",15),
("PIB",15),
("PIIA",15),
("PIIB",15),
("PIIIA",15),
("PIIIB",15);