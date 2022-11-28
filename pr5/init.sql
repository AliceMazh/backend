CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  password VARCHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'admin', '{SHA}0DPiKuNIrrVmD8IUCuw1hQxNqZc=') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'admin' AND password = '{SHA}0DPiKuNIrrVmD8IUCuw1hQxNqZc='
) LIMIT 1;

CREATE TABLE IF NOT EXISTS works (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  work_name TEXT NOT NULL,
  work_type TEXT NOT NULL,
  work_desc TEXT NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO works (`work_name`, `work_type`, `work_desc`)
SELECT * FROM (SELECT '3пр', 'студенческая работа', "бэкенд") AS tmp
WHERE NOT EXISTS (
    SELECT work_name FROM works WHERE work_name = '3пр' 
) LIMIT 1;