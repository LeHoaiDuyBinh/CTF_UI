CREATE DATABASE IF NOT EXISTS web_ctf;

USE web_ctf;
DROP TABLE IF EXISTS `Categories`;

CREATE TABLE Categories (
  category_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL
);
DROP TABLE IF EXISTS `Challenges`;

CREATE TABLE Challenges (
  chall_id INT PRIMARY KEY AUTO_INCREMENT,
  chall_name NVARCHAR(300),
  description NVARCHAR(300),
  score INT NOT NULL,
  author NVARCHAR(100),
  flag  VARCHAR(300),
  chall_path  VARCHAR(300),
  category_id INT,
  FOREIGN KEY (`category_id`) REFERENCES `Categories`(`category_id`)
);

DROP TABLE IF EXISTS `Users`;

CREATE TABLE Users (
  username VARCHAR(100) PRIMARY KEY,
  password VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  random_code VARCHAR(20)
);

DROP TABLE IF EXISTS `Solved`;

CREATE TABLE Solved (
  id INT PRIMARY KEY AUTO_INCREMENT,
  chall_id INT,
  username VARCHAR(100),
  submit_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`chall_id`) REFERENCES `Challenges`(`chall_id`),
  FOREIGN KEY (`username`) REFERENCES `Users`(`username`)
);

DROP TABLE IF EXISTS `AdminAccounts`;

CREATE TABLE AdminAccounts (
  username VARCHAR(100) PRIMARY KEY,
  password VARCHAR(100) NOT NULL
);

INSERT INTO AdminAccounts (username, password) VALUES('moros', '123');

INSERT INTO `Categories`(`name`) VALUES ('Web');
INSERT INTO `Categories`(`name`) VALUES ('Reverse');
INSERT INTO `Categories`(`name`) VALUES ('Binary Exploit');
INSERT INTO `Categories`(`name`) VALUES ('Network');
INSERT INTO `Categories`(`name`) VALUES ('Forensic');

INSERT INTO `Challenges`(`chall_name`,`description`, `score`, `author`, `flag`, `chall_path`, `category_id`) VALUES ('FTP - authentication','test',20,'Moros','ptithcmCTF','/public/challenges/ch1.pcap',4);
INSERT INTO `Users`(`username`, `password`, `email`) VALUES ('teo','teo','teo@gmail.com');