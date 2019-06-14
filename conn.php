<?php
//connection file
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "noah";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
$connection = new PDO($dsn, $username, $pass, $options);