<?php
$servername = "localhost";
$username = "root";
$password = "root";




try {
    $conn = new PDO("mysql:host=$servername;dbname=airbnb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO apartments (COL2, COL3)
    VALUES ('John', 'Doe');";
       $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
?>
