<?php
$dsn = 'mysql:dbname=user;host=localhost';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn,$user,$pass);
$pdo->query("set names utf8");
$stmt = $pdo->query('select * from users');
$rows = $stmt->fetchAll();
echo "<pre>";
print_r($rows);


 ?>




