CREATE TABLE accounts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    nim VARCHAR(255),
    university VARCHAR(255),
    whatsapp VARCHAR(15),
    email VARCHAR(255),
    password VARCHAR(255),
) ENGINE=INNODB;