-- Active: 1789981276154@@127.0.0.1@3306@dwes_tienda
CREATE DATABASE IF NOT EXISTS dwes_tienda;

DROP USER IF EXISTS 'dwes_tienda'@'localhost';
CREATE USER 'dwes_tienda'@'localhost' IDENTIFIED BY '123456';

GRANT SELECT, INSERT, UPDATE, DELETE ON dwes_tienda.* TO 'dwes_tienda'@'localhost';

FLUSH PRIVILEGES;