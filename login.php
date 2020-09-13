<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
    	<div class="row">
    		<div class="col-lg-6">

    			<h2>Login Form</h2>


    			<form action="validation.php" method="post">

 					<div class="form-group">
 						<label for="username">UserName</label>
 						<input type="text" name="user" id="username" class="form-control">
 					</div>
    				<div class="form-group">
 						<label for="password">Password</label>
 						<input type="password" name="password" id="password" class="form-control">
 					</div>
 					<button type="submit" class="btn btn-primary">Login</button>
    			</form>
    			
    		</div>
    		
    		<div class="col-lg-6">


    			<h2>Sign Up</h2>


    			<form action="registration.php" method="post">

 					<div class="form-group">
 						<label for="username">UserName</label>
 						<input type="text" name="user" id="username" class="form-control">
 					</div>
    				<div class="form-group">
 						<label for="password">Password</label>
 						<input type="password" name="password" id="password" class="form-control">
 					</div>
 					<button  type="submit"  class="btn btn-primary">SignUp</button>
    			</form>
    			
    		</div>
    		
    	</div>
    </div>


    
</body>
</html>