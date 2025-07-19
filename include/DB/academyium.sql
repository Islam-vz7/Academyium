
-- Create Database
CREATE DATABASE IF NOT EXISTS academyium;
USE academyium;

-- Table: users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

-- Table: faculty
CREATE TABLE IF NOT EXISTS faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    role VARCHAR(255),
    hospital VARCHAR(255),
    image VARCHAR(255),
    description TEXT
);

-- Table: courses
CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price DECIMAL(10, 2),
    location VARCHAR(255),
    start_date DATE,
    end_date DATE,
    registration_form_link VARCHAR(255),
    feedback_form_link VARCHAR(255)
);

-- Table: days
CREATE TABLE IF NOT EXISTS days (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT,
    title VARCHAR(255),
    date DATE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

-- Table: sessions
CREATE TABLE IF NOT EXISTS sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day_id INT,
    title VARCHAR(255),
    start_time TIME,
    end_time TIME,
    description TEXT,
    FOREIGN KEY (day_id) REFERENCES days(id) ON DELETE CASCADE
);

-- Table: news
CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT
);

-- Table: gallery
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255)
);
