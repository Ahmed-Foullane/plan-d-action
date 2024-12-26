-- Active: 1735219019563@@127.0.0.1@3306@myapp
create table users (
    id int PRIMARY KEY AUTO_INCREMENT UNIQUE,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50)
);


INSERT INTO users (null, "ahmed", "foullane", "ahmedfoullane@gmail.com", "12345");


SELECT $ FROM
