PRACTICAL EXAM - CRUD SYSTEM

------------------------------
GitHub Repository:
https://github.com/SHAHID-CODES-44/Practical_Exam
------------------------------

💡 ABOUT:
This is a simple PHP-MySQL CRUD (Create, Read, Update, Delete) Student Management System.
The UI is easily editable based on the exam question.

📁 FILE STRUCTURE:
- db.php          --> Database connection
- index.php       --> Main page (Read + UI)
- add.php         --> Insert new record
- edit.php        --> Update record
- delete.php      --> Delete record

🗃️ DATABASE DETAILS:
Database Name: crud

Table Name: data

SQL Query to create the table:
-----------------------------------------------------


CREATE DATABASE crud;

USE crud;

CREATE TABLE data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    course VARCHAR(100)
);
-----------------------------------------------------

MAKE SURE TO EDIT PORT ....

---------------------------------------------------- 
✍️ INSTRUCTIONS:
- Import the above SQL in phpMyAdmin.
- Make sure your db.php file has the correct host/user/password.
- Open `index.php` in browser using XAMPP server.
- Modify field names or design as needed during practical exam.
