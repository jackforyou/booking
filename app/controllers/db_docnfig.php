<?php

namespace PDO_DB_Config;
class MySQL
{
	public static function connectDB()
	{
	$servername = "localhost";
	$username = "u379384402_jack";
	$password = "Bk010172289";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=u379384402_lym", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
	    // prepare sql and bind parameters
	    $stmt = $conn->prepare("INSERT INTO member (username, password, email) 
	    VALUES (:firstname, :lastname, :email)");
	    $stmt->bindParam(':firstname', $firstname);
	    $stmt->bindParam(':lastname', $lastname);
	    $stmt->bindParam(':email', $email);
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
	}

}