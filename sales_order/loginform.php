<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="wrapper">
 	<div class="heading">
 		<h1>WELCOME!!!</h1>
 	</div>
	<div class="form">
 		<form id="users" action="db/login.php" method="post",>
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="email" name="email" id="user" class="form-control" placeholder="EMAIL" />
 			</span><br>
 			<span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" name= "password" id="pass" class="form-control" placeholder="PASSWORD" />
 			</span><br>
         <input type="submit" name="submit">
		</form>
	</div>
 	</div>
 </div>
</body>
</html>