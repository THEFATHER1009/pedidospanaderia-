-- BASE DE DATOS PANADERIA
CREATE DATABASE IF NOT EXISTS panaderia CHARACTER SET utf8mb4;
USE panaderia;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(150),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,

    media_libra_genovesa INT DEFAULT 0,
    media_libra_frutas INT DEFAULT 0,
    media_libra_chocolate INT DEFAULT 0,

    dos_libras_genovesa INT DEFAULT 0,
    dos_libras_frutas INT DEFAULT 0,
    dos_libras_chocolate INT DEFAULT 0,

    cinco_libras_genovesa INT DEFAULT 0,
    cinco_libras_frutas INT DEFAULT 0,
    cinco_libras_chocolate INT DEFAULT 0,

    estado ENUM('Pendiente','Despachado','Recibido') DEFAULT 'Pendiente',
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);
