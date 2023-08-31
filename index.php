<?php
//https://www.sitepoint.com/community/t/using-session-variables-to-keep-user-logged-in-if-they-havent-logged-out/294407
ob_start();
session_start();
include 'db.php';
if(isset($_POST['submit'])){
	$username = $_POST['username1'];
	$password = $_POST['password'];
	
	if($username =='' || $password == ''){
	echo '<p class="errorMsg">All the fields are required</p>'; 
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' AND password = '$password'");

        if(mysqli_num_rows($sql) == 1) {
	 $member = mysqli_fetch_assoc($sql);
		
			$_SESSION['username'] = $username;
			$_SESSION['contact_id'] = $member['contact_id'];
			
			header('Location: dashboard.php?d=dashboard'); 
		
}else{
	echo '<p class="loginerror">Invalid username or password</p>';
}
	
	}
	}

?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <form class="loginbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h1> login</h1>
   
 Username<span style="color:red;">*</span><input type="text" name ="username1" ><br>
 Password<span style="color:red;">*</span><input type="password" name="password" ><br>
  <input type="submit" value ="login" name="submit">
  <p> Not a member yet? Register <a href="registration.php" id="reg"> Here</a>

  </form>

</body>
</html>