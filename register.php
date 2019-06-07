<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "structv2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$firstname = $_POST["first_name"];
	$lastname = $_POST["last_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
    $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password)
    VALUES ('$firstname', '$lastname', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
