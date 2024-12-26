<?php

$host="localhost";
$username="root";
$password="123456";
$database="discuss";

try {
    $connection=new PDO("mysql:host=$host;dbname=$database",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection failed".$err->getMessage();
}



?>