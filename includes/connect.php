<?php
session_start();
$host = 'localhost';
$db = 'webshop';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';



try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>

