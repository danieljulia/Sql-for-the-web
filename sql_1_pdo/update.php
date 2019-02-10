<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "root";




try {
    $conn = new PDO("mysql:host=$servername;dbname=airbnb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE apartments SET price=? WHERE id=?";

    $stmt= $conn->prepare($sql);
    $stmt->execute([$_GET['price'],$_GET['id']]);
    echo "actualitzat a ".$_GET['price']." €";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
?>
