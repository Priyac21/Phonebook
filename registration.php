<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$name1 = $_POST['fname'];
	$username = $_POST['usrname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
	if($name1 == '' || $username == ''  || $password == '' || $cpassword ==''){
		echo '<p class="errorMsg">Fields marked with * are required</p>';
	} else if( $password != $cpassword){
		echo '<p class="errorMsg" style= "text-align: center;">Passwords do not match..</p>';
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' ");

       	if(mysqli_num_rows($sql)==1){
			echo 'username already exists';
	
		} else{
			$sql = "INSERT INTO userdetails(name, username, email, password) VALUES ('$name1','$username','$email', '$password')";
			$result= mysqli_query($dbcon,$sql);
			if($result){
				echo '<p class="regsucces">Record added successfully</p>';
		}else  {
				echo '<p class="errorMsg">There was error while adding record</p>';  
			}
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
  <form class="registbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <?php 
   ?>
  <h1> Registration</h1>
 <label>Name<span style="color:red;">*</span></label> <input type="text" name ="fname" class="labelname"><br>
 <label>Username<span style="color:red;">*</span></label> <input type="text" name ="usrname" class="labelname"><br>
 <label>Email</label> <input type="text" name="email" class="labelname"><br>
 <label>Password<span style="color:red;">*</span></label> <input type="password" name="password" class="labelname"><br>
 <label>Confirm Password<span style="color:red;">*</span></label> <input type="password" name="cpassword" class="labelname"><br>
 
  <input type="submit" value ="Register" name="submit">
  <p class="acount"> Already have an account? please login <a href="index.php" id="reg"> Here </a>
  

  </form>

</body>
</html>