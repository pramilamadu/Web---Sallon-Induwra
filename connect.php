<?php

	
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];
	$sbranch = $_POST['sbranch'];
	$date = $_POST['date'];
	$email = $_POST['email'];
	$time = $_POST['time'];
	$message = $_POST['message'];

	$conn = new mysqli('localhost', 'root', '', 'booking');
		if ($conn->connect_error){
               die('Connection Failed :' .$conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into bookingusers(name, phonenumber, sbranch, date, email, time, message)
				values(?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sisisis", $name, $phonenumber, $sbranch, $date, $email, $time, $message);
			$stmt->execute();
			echo "Your Apporintment has been created succesfully..";
			$stmt->close();
			$conn->close();
		}

?>