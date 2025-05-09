CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    salutation VARCHAR(10) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL
);
