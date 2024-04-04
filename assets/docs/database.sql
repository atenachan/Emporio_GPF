
DROP DATABASE IF EXISTS gpf

CREATE DATABASE gpf CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE gpf;

CREATE TABLE products (
  product_id INT PRIMARY KEY AUTO_INCREMENT,
  product_name VARCHAR(255),
  product_description TEXT,
  product_category VARCHAR(225),
  product_price DOUBLE,
  product_image VARCHAR(225),
  product_created DATETIME,
  product_modified DATETIME
);