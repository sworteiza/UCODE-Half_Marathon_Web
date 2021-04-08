CREATE DATABASE IF NOT EXISTS sword;
CREATE USER 'ysolovykh'@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL PRIVILEGES ON * . * TO 'ysolovykh'@'localhost';
FLUSH PRIVILEGES;

USE sword;

CREATE TABLE IF NOT EXISTS users(
    login VARCHAR(50) PRIMARY KEY NOT NULL,
    pass VARCHAR(50) NOT NULL,
    name TEXT NOT NULL,
    email VARCHAR(50) NOT NULL,
    status ENUM('user', 'admin') DEFAULT 'user'
);