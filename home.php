<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/	bootstrap/3.4.1/css/bootstrap.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
	<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
	<a href="logout.php">LOGOUT</a>
  </div>
</body>
</html>