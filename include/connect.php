<?php

$host = 'localhost';
$db   = 'flowlu';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);
