<?php

	if (empty($_POST['email'])) {
		echo "empty mail";
		exit();
	} 
	elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo "email does not match regexp";
		exit();
	}

	elseif (empty($_POST['name'])) {
		echo "empty name";
		exit();
	} 

	elseif (empty($_POST['lastname'])) {
		echo "empty lastname";
		exit();
	} 

	elseif (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $_POST['name'])) {
		echo "name does not match with regexp";
		exit();
	}

	elseif (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $_POST['lastname'])) {
		echo "lastname does not match regexp";
		exit();
	}
	elseif (strlen($_POST['password']) < 8) {
		echo "password too short";
		exit();
	}

	else {
			print_r($_POST);


    }