<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$designation = $_POST['designation'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	if($fname == ''  || $phone ==''  ){
		echo '<p class="addusererror">Fields marked with * are required</p>';
	} else {
		$sql = "INSERT INTO contactdetails(contact_name,designation	,phone,address) VALUES ('$fname','$designation','$phone', '$address')";

$result= mysqli_query($dbcon,$sql);
		if($result){
	   echo '<p class="addsucces">Record added successfully</p><br> ';
   }else {
	 echo '<p class="aderrorMsg">There was error while adding record</p>';  
   
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
<div id= "main">
 
  <h1> Phone Book</h1>
<?php  include_once 'menu-main.php';?></div>
  <form class="addusrbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h1> Add User</h1>
 <label>Name<span style="color:red;">*</span></label> <input type="text" name ="fname" ><br>
 <label>Designation</label> <input type="text" name ="designation" ><br>
 <label>Phone<span style="color:red;">*</span></label> <input type="text" name="phone" ><br>
 <label>Address</label> <input type="text" name="address" ><br>
 
 
  <input type="submit" value ="Add" name="submit">
  
  

  </form>

</body>
</html>