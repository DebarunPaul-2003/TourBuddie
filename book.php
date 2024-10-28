<?php
// Simple booking form processing
$name = $_POST["name"];
$email = $_POST["email"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$rooms = $_POST["rooms"];

// Validate input
if (empty($name) || empty($email) || empty($checkin) || empty($checkout) || !is_numeric($rooms)) {
	echo "Invalid input.";
	exit();
}

// Store booking information in a database or send an email
// ...

// Confirm booking
echo "Your booking has been confirmed. Thank you, " . $name . "!";
?>