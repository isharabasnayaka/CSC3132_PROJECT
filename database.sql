CREATE DATABASE IF NOT EXISTS CareBond;

USE CareBond;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL, -- Store hashed passwords for security
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS find_job (
    user_id INT PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    job_type VARCHAR(100) NOT NULL,
    qualifications TEXT NOT NULL,
    location VARCHAR(100) NOT NULL,
    work_hours VARCHAR(100) NOT NULL,
    salary VARCHAR(50) NOT NULL,
    experience TEXT NOT NULL,
    profile_photo_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);