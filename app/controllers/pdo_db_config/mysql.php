<?php

namespace PDO_DB_Config;
use PDO;
class MySQL
{
	public $conn;
	public $firstname;
	public $lastname;
	public $email;
	public function connectDB()
	{
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	    $this->conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
	    // set the PDO error mode to exception
	    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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