<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){

	header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> User page</title>

	<!--  Custom css file -->
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class="container">

	<div class="content">
		<h3>Hi, <span>User</span></h3>
		<h1> welcome <span> <?php echo $_SESSION['user_name'];?></span></h1>
		<p>this is an user page</p>
		<a href="http://localhost/Tourbuddie/userDashboardProfile.php" class="btn"> Go to User Dashboard</a>
		<a href="logout.php" class="btn"> Log Out</a>
	</div>
	
</div>



</body>
</html>