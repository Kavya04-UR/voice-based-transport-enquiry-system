-- Create database (optional)
CREATE DATABASE IF NOT EXISTS transport_db;
USE transport_db;

-- Admin table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

-- Insert default admin
INSERT INTO admin (username, password) VALUES ('admin', 'admin');

-- Buses table
CREATE TABLE IF NOT EXISTS buses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bus_number VARCHAR(50),
    origin VARCHAR(100),
    destination VARCHAR(100)
);

-- Feedback table
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample buses
INSERT INTO buses (bus_number, origin, destination) VALUES
('101', 'MG Road', 'Majestic'),
('202', 'Electronic City', 'Silk Board');
