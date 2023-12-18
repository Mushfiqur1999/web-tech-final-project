-- Create a database
CREATE DATABASE IF NOT EXISTS project;
USE project;

-- Create a table for users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobileno VARCHAR(15) NOT NULL,
    address1 VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL
);

-- Insert some sample data (you can remove this in production)
INSERT INTO users (firstname, lastname, username, password, gender, email, mobileno, address1, country) 
VALUES 
('John', 'Doe', 'john_doe', 'A123456@', 'Male', 'john@example.com', '1234567890', '123 Main St', 'USA'),
('Jane', 'Doe', 'jane_doe', 'A30111995@', 'Female', 'jane@example.com', '9876543210', '456 Oak St', 'Canada');


CREATE TABLE IF NOT EXISTS package (
    package_id INT AUTO_INCREMENT PRIMARY KEY,
    packagename VARCHAR(255) NOT NULL,
    hotelname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    rating DECIMAL(3, 1) NOT NULL
);

-- Insert sample data into the 'package' table
INSERT INTO package (packagename, hotelname, location, cost, rating)
VALUES
    ('HP laptop', 'Star Tech', 'IDB Dhaka', 62000, 4.5),
    ('Iphone 15 Pro max', 'Apple Care', 'Jamuna Future Park', 180000, 4.8),
    ('Apple Iphone 12 Pro max', 'Apple Care', 'Bashundhara City', 120000, 4.0),
    ('Apple watch', 'Apple Care', 'Jamuna Future Park', 45000, 4.1),
    ('Coffee Maker', 'Waton', 'Jamuna Future Park', 15000, 4.4),
    ('Digital Camera', 'Canon', 'Mirpur 12', 38000, 4.7),
    ('Dell laptop', 'Rayns', 'IDB', 68000, 4.5),
    ('Lenovo laptop', 'Rayns', 'kuril', 40500, 4.5),
    ('T-shart', 'Red', 'Jamuna Future Park', 1800, 3.5),
    ('Canon Camera', 'Star tech', 'Jamuna Future Park', 1800, 4.8),
    ('Baby doll', 'Baby shop', 'Bashundhara City', 1800, 4.2);