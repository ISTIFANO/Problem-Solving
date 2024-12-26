
-- creation de database

CREATE DATABASE user_maanagement;
use user_maanagement;
CREATE Table users(
    id int PRIMARY KEY AUTO_INCRUMENT;
    firstName VARCHAR(50) NOT NULL;
    lastName VARCHAR(50) NOT NULL;
    Email VARCHAR(100) NOT NULL;
    PasswordUser VARCHAR(255) NOT NULL;


);