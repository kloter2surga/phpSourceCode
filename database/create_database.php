//PDO
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=newDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE newDB";
    $conn->exec($sql);
    echo "Database created successfully with the name newDB";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }
$conn = null;
?>
