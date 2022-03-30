CREATE DATABASE login_cadastro;

CREATE TABLE usuarios(
    id int auto_increment primary_key,
    email varchar(30) not null,
    senha varchar(32) not null
);