-- creating database
CREATE DATABASE operations;
-- creating tables
CREATE TABLE Company (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    code VARCHAR(255),
    size INT
);
CREATE TABLE Category (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    budget VARCHAR(255),
    percentage VARCHAR(255),
    company_id INT,
    FOREIGN kEY (company_id) REFERENCES Company(id)
);
CREATE TABLE Permission (
    id INT PRIMARY KEY,
    name VARCHAR(255)
);
CREATE TABLE Role (
    id INT PRIMARY KEY,
    name VARCHAR(255)
);
CREATE TABLE PermissionRole (
    permission_id INT,
    FOREIGN kEY (permission_id) REFERENCES Permission(id),
    role_id INT,
    FOREIGN kEY (role_id) REFERENCES Role(id)
);
CREATE TABLE User (
    id INT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    phone VARCHAR(255),
    budget INT,
    category_id INT,
    FOREIGN kEY (category_id) REFERENCES Category(id)
);
CREATE TABLE RoleUser (
    role_id INT,
    FOREIGN kEY (role_id) REFERENCES Role(id),
    user_id INT,
    FOREIGN kEY (user_id) REFERENCES User(id)
);
CREATE TABLE Operation (
    id INT PRIMARY KEY,
    price INT,
    user_id INT,
    FOREIGN kEY (user_id) REFERENCES User(id)
);