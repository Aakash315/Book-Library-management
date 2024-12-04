<?php

try {
    $host = 'localhost';
    $dbname = 'library';
    $username = 'root';
    $password = '';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
print_r($conn);
