
-- Crear base de datos por medio de la GUI y por comando
-- Crear tablas
-- Operaciones CRUD
-- Operaciones: INSERT INTO, SELECT (*), UPDATE SET, DELETE FROM
-- modificar estructuras de tablas: ALTER TABLE (ADD, MODIFY, DROP COLUMN, CHANGE)

-- DROP TABLE name = Eliminar por completo una tabla
-- INNER JOIN = combina registros de 2 tablas con alguna coincidencia
-- SELECT con (WHERE, BETWEEN, %LIKE%)
-- RENAME TABLE x TO y



CREATE DATABASE IF NOT EXISTS sistema_crud;
-- CREATE SCHEMA usuarios;

-- Autenticación de usuario
CREATE TABLE IF NOT EXISTS usuario (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    pass VARCHAR(50)  NOT NULL,
    usuario_create DATETIME,
    usuarios_update TIMESTAMP
);


CREATE TABLE persona(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    edad VARCHAR(3) NOT NULL,
    user_id INT NOT NULL,
    persona_create DATETIME,
    persona_update TIMESTAMP,
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES usuario(id)
);


CREATE TABLE IF NOT EXISTS productos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR(100) NOT NULL,
    precio FLOAT NOT NULL,
    stock INT NOT NULL,
    productos_create DATETIME,
    productos_update TIMESTAMP
);


INSERT INTO usuario (username, pass, usuario_create) VALUES 
('pepe', '123', NOW()),
('Lorena', '555', NOW()),
('Jose', '888', NOW());
 
INSERT INTO persona (nombres, apellidos, correo, telefono, edad, user_id, persona_create) VALUES 
('Pepe ', 'Gonzales', 'pepe@yopmail.com', '32456754', '30', 1, NOW()),
('Lorena', 'Garcia', 'lorena@yopmail.com', '345675432', '30', 2, NOW()),
('Jose Manuel', 'Londoño', 'jose@yopmail.com', '32456432', '30', 3, NOW());


INSERT INTO productos (nombre_producto, precio, stock, productos_create) VALUES 
('Computador', 12.5, 10, NOW()),
('Televisor', 20.2, 3, NOW()),
('Nevera', 30.1, 7, NOW());


-- EJERCICIOS
-- * INSERT INTO
--    Inserta 5 registros en usuario y personas, recuerda que el USER_ID de persona debe ser el mismo ID de usuario
--    Que las edades de personas sean diferentes


INSERT INTO usuario (username, pass, usuario_create) VALUES 
('carlos2025', 'carlosmario2025', NOW()),
('andrea', 'andrea2025', NOW()),
('emilia', 'migue123', NOW()),
('teresa', 'teresa0908', NOW()),
('miguel', 'migue*3010', NOW());

INSERT INTO persona (nombres, apellidos, correo, telefono, edad, user_id, persona_create) VALUES 
('Carlos Mario', 'Duarte', 'carlos@yopmail.com', '435654332', '17', 4, NOW()),
('Andrea', 'Perez', 'andrea@yopmail.com', '56546', '22', 5, NOW()),
('Emilia', 'Zambrano', 'emilia@yopmail.com', '5464553436', '46', 6, NOW()),
('Teresa', 'Jaramillo', 'teresa@yopmail.com', '14978987', '35', 7, NOW()),
('Miguel', 'Tonson', 'miguel@yopmail.com', '123223098', '64', 8, NOW());


-- * SELECT con WHERE y LIKE
--    Encuentra todos los usuarios username contenga la letra "a"
--    Buscar todos los números telefónicos los cuales contengan un 9


SELECT * FROM usuario WHERE username LIKE "%a%";
SELECT * FROM persona WHERE telefono LIKE "%9%";


-- * SELECT con BETWEEN
--    Encuentra todas las personas que tienen entre 20 y 35 años (incluidos). Solamente mostrar sus nombres, apellidos y edad


SELECT nombres, apellidos, edad FROM persona WHERE edad BETWEEN 20 AND 35;



-- * UPDATE
--    En productos hay un registro llamado "Computador" con un Stock a 10, Actualiza el stock a 0 para este producto.

UPDATE productos SET stock = 0 WHERE id = 1;




