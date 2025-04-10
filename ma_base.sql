CREATE DATABASE ma_base CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE ma_base;

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    age INT NOT NULL
);
