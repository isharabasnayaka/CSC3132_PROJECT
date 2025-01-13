CREATE DATABASE IF NOT EXISTS CareBond;

USE CareBond;

CREATE TABLE IF NOT EXISTS find_job_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    job_type VARCHAR(100) NOT NULL,
    qualifications TEXT NOT NULL,
    location VARCHAR(100) NOT NULL,
    work_hours VARCHAR(100) NOT NULL,
    salary VARCHAR(50) NOT NULL,
    patients TEXT NOT NULL,
    experience TEXT NOT NULL,
    profile_photo_path VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
