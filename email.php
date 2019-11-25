<?php
$dbServer = 'localhost';
$dbUsername = 'root';
$dbName = 'users';
$dbPassword = '';


$conn = new mysqli($dbServer,$dbUsername,$dbPassword,$dbName);
$sql = 'CREATE TABLE registrated( id INT (4) NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR (20) NOT NULL, lastname VARCHAR (50) NOT NULL, email VARCHAR (100) NOT NULL, password VARCHAR (2000) NOT NULL )';
$conn->query($sql);






if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	if (empty($email)) {
		header("Location: jazzworldreg.php?email_error");
		exit();
	} 
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: jazzworldreg.php?email_notvalid");
		exit();
	}

	elseif (empty($name)) {
		header("Location: jazzworldreg.php?name_error");
		exit();
	} 

	elseif (empty($lastname)) {
		header("Location: jazzworldreg.php?lastname_error");
		exit();
	} 

	elseif (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $name)) {
		header("Location: jazzworldreg.php?name_notvalid");
		exit();
	}

	elseif (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $lastname)) {
		header("Location: jazzworldreg.php?lastname_notvalid");
		exit();
	}

	else {
			$password = md5($password);
			$sql = "INSERT INTO registrated (name,lastname,email,password) VALUES ('$name','$lastname','$email','$password')";
			$conn->query($sql);

			$sql = "ALTER TABLE registrated ADD country VARCHAR (30) NOT NULL";
			$conn->query($sql);

			$sql = "UPDATE registrated SET country = 'Ukraine'";
			$conn->query($sql);		

			header("Location: jazzworldreg.php?success");	


    }
} else {
	echo "Registration Unsuccessful";
}