CREATE DATABASE IF NOT EXISTS ucode_web;
CREATE USER 'ysolovykh'@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL PRIVILEGES ON * . * TO 'ysolovykh'@'localhost';
FLUSH PRIVILEGES;