<?php
//assegurar que php mostra els errors

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "root";




try {
    $conn = new PDO("mysql:host=$servername;dbname=airbnb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    foreach($conn->query('SELECT * FROM apartments LIMIT 1,20') as $row) {
        echo "<li>".$row['COL2'].' '.$row['COL3']."</li>\r\n"; //etc...
    }
}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
?>
