CREATE DATABASE bloggy;

USE bloggy;

CREATE TABLE post (
  id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  content TEXT,
  author VARCHAR(50),
  authorID INT(8),
  created DATE
);

INSERT INTO post VALUES(NULL, "first post!", "This is my very first post of all I believe that this works", "hajindvlp", "12131", "2020-09-10");