/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  isidro-bellon
 * Created: 13 abr. 2021
 */

CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) not null,
    email       varchar(100) not null,
    password    varchar(100) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    categoria_id    int(255) not null,
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;