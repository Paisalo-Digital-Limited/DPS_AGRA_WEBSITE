// =========================
// DATABASE SQL
// =========================
/*
CREATE DATABASE hospital_erp;

CREATE TABLE admin (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(50)
);

INSERT INTO admin (username, password) VALUES ('admin','admin');

CREATE TABLE employees (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 role VARCHAR(100)
);

CREATE TABLE patients (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 disease VARCHAR(100)
);

CREATE TABLE salary (
 id INT AUTO_INCREMENT PRIMARY KEY,
 employee VARCHAR(100),
 amount INT
);

CREATE TABLE store (
 id INT AUTO_INCREMENT PRIMARY KEY,
 item VARCHAR(100),
 quantity INT
);

CREATE TABLE rooms (
 id INT AUTO_INCREMENT PRIMARY KEY,
 room_no VARCHAR(50),
 patient VARCHAR(100)
);
*/