-- create database studentData;
use studentData;
create table major(
    major_id  INT AUTO_INCREMENT PRIMARY KEY,
    major_name  VARCHAR(50) UNIQUE
);
create table students (
    student_id  CHAR(8) PRIMARY KEY,
    full_name  VARCHAR(100),
    major_id int,
    FOREIGN KEY(major_id) REFERENCES major(major_id)
);
