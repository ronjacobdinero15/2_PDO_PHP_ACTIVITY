<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "dinero_2";
    $dsn = "mysql:host={$host};dbname={$dbname}";

    $pdo = new PDO(dsn: $dsn, username: $user, password: $password);