<?php
    //Pesronal system database connection
   // $host = 'localhost'; 
   // $db = 'event_db';
   // $user = 'root';
   // $pass = '';
   // $charset = 'utf8mb4';

    //remote datebase connection
    $host = 'remotemysql.com'; 
    $db = 'VcqeYknmDc';
    $user = 'VcqeYknmDc';
    $pass = 'H3pERMjdgb';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'username.php';
    $crud = new crud($pdo);
    $username = new username($pdo);
    
    $username->insertusername("admin","password");
   
?>
