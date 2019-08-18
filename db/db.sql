#verificar si existe la base de datos para crearla#
CREATE DATABASE IF NOT EXISTS greenmatik;
USE greenmatik;

#CREAR TABLAS#
CREATE TABLE USUARIOS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL,
    apodo VARCHAR(100) NOT NULL,
    fechaAlta DATE,
    rol VARCHAR(100),
    imagen VARCHAR(100) NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE CATEGORIAS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE SERIES(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    ventajas TEXT NOT NULL,
    tituloOpciones VARCHAR(100) NOT NULL,
    incluye1 VARCHAR(100) NOT NULL,
    incluye2 VARCHAR(100) NOT NULL,
    incluye3 VARCHAR(100) NULL,
    incluye4 VARCHAR(100) NULL,
    incluye5 VARCHAR(100) NULL,
    incluye6 VARCHAR(100) NULL,
    incluye7 VARCHAR(100) NULL,
    incluye8 VARCHAR(100) NULL,
    CONSTRAINT pk_series PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE PRODUCTOS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    categoria_id INT(10) NOT NULL,
    serie_id INT(10) NOT NULL,
    caracteristicas_id INT(10) NOT NULL,
    nombre VARCHAR(120) NOT NULL,
    imagen LONGBLOB NOT NULL,
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES CATEGORIAS(id),
    CONSTRAINT fk_producto_serie FOREIGN KEY(serie_id) REFERENCES SERIES(id),
    CONSTRAINT fk_producto_caracteristicas FOREIGN KEY(caracteristicas_id) REFERENCES CARACTERISTICAS(id)
)ENGINE=InnoDb;

CREATE TABLE CARACTERISTICAS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    producto_id INT(10) NOT NULL,
    numeroCepillos VARCHAR(30) NOT NULL,
    areaDeMontaje VARCHAR(30) NOT NULL,
    unidadesPorHora VARCHAR(30) NOT NULL,
    potencialTotal VARCHAR(30) NOT NULL,
    longitudCarril VARCHAR(30) NOT NULL,
    dimensionesEquipo VARCHAR(120) NOT NULL,
    medidaVehiculo VARCHAR(120) NOT NULL,
    consumoVehiculo VARCHAR(255) NOT NULL,
    fabricacion VARCHAR(100) NOT NULL,
    personalizacion VARCHAR(10) NOT NULL,
    garantia VARCHAR(50) NOT NULL,
    CONSTRAINT pk_caracteristicas PRIMARY KEY(id),
    CONSTRAINT fk_caracteristica_producto FOREIGN KEY(producto_id) REFERENCES PRODUCTOS(id)
)ENGINE=InnoDb;
