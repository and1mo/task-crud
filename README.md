Secure Task CRUD (PHP and MySQL)
A lightweight, secure Task Management application built to demonstrate fundamental Fullstack Development skills using PHP and Relational Databases.

Overview
This project is a functional CRUD (Create, Read, Update, Delete) application. It was built to practice server-side logic, database management, and web security best practices.

Tech Stack
Backend: PHP 8.x (using PDO for database interactions)

Database: MySQL

Frontend: HTML5, CSS3, Bootstrap 5 (Responsive Design)

Security: Prepared Statements (SQL Injection Protection) and XSS Filtering

Key Features
Create: Add new tasks via a simple, intuitive input.

Read: Live display of all tasks stored in the MySQL database.

Update: (Planned) Toggle task completion status.

Delete: Remove tasks instantly with a single click.

Security: Implementation of PDO prepared statements to ensure data integrity.

Installation and Setup
To run this project locally, you will need a local server environment like XAMPP, WAMP, or MAMP.

Clone the repository: git clone https://github.com/and1mo/task-crud.git

Setup the Database:

Open phpMyAdmin.

Create a new database named task_db.

Import the database.sql file provided in this repo.

Configure Connection:

Open db.php and update your database credentials (username/password) if necessary.

Run the App:

Move the project folder to your server's root directory (e.g., htdocs for XAMPP).

Navigate to http://localhost/task-crud in your browser.

What I Learned
How to handle Asynchronous-style logic in a synchronous language.

The importance of Prepared Statements to prevent SQL Injection attacks.

Structuring a PHP project with separate logic (db.php) and presentation (index.php) files.

Contact
Ashwyn Molloy (https://and1mo.github.io/)
