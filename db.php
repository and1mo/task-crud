<?php
$host = 'localhost';
$user = 'root'; // Change if using a real host
$pass = '';     // Change if using a real host
$dbname = 'task_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
