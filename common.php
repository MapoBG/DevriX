<?php
session_start();
spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    require_once $className . '.php';
});

try {
    $pdo = new PDO("mysql:dbname=job_publications;host=localhost:3306", "root", "");
    $db = new \Database\PDODatabase($pdo);
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

$usergreet = 'guest';

if(isset($_SESSION['username'])){
    $usergreet = $_SESSION['username'];
}
