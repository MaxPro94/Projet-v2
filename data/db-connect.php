<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'projetv2';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
} catch (PDOException $e) {
    echo "Error " . $e->getMessage();
    die;
}