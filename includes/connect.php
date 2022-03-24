<?php
$host = 'localhost';
$db = 'webshop';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTER_EMULATE_PREPARES => false,
];

try
{
    $connect = new PDO($dsn, $user, $pass, $opt);
    echo "Verbinding is gemaakt.";

}
catch (PDOExeption $e)
{
    echo $e->getMessage();
    die("sorry, Database probleem");
}

