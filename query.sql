-- Create the database
CREATE DATABASE IF NOT EXISTS login_register;
USE login_register;

-- Create user table
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: sample test data
INSERT INTO user (fullname, email, password)
VALUES 
('Test User', 'test@example.com', '$2y$10$examplehashreplacewithrealhash');


--create user_details for contact.php
CREATE TABLE user_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    city VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


