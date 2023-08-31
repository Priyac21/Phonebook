<?php
ob_start(); 
  require_once 'db.php';
   // $getid = $_GET['editid'];
   // update
   if(isset($_POST['btnupdate'])){
	    $profileid = $_POST['contact_id'];
	   $fname = $_POST['fname'];
	   $username = $_POST['uname'];
	   $email = $_POST['uemail'];
	   
	   
   $qu = "UPDATE userdetails SET name='$fname', username= '$username',email= '$email' 
   WHERE contact_id ='$profileid'";
    $run_query =@mysqli_query($dbcon,$qu);
	if($run_query){
		
    header("Location:viewProfile.php?update=profileupated"); 
   }else  {
	 echo '<p class="errorMsg">There was error while updating record</p>';  
   
	}	
   }
   $profileid = $_GET['editProfile']; // GETTING ID FROM URL
   $query = "SELECT * FROM userdetails WHERE contact_id ='$profileid' ";
    $result = @mysqli_query($dbcon,$query);
	 $drow = @mysqli_fetch_assoc($result);
	 
?>
  <html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
 
  <h1> Phone Book</h1>
<?php  include_once 'menu-main.php';?></div>
 
 <form class="addusrbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h1> Update User</h1>
  <input type="hidden" name ="contact_id" value= "<?php echo $drow['contact_id'];?>"><br>
 <label>Name</label> <input type="text" name ="fname" value= "<?php echo $drow['name'];?>"><br>
 <label>Username</label> <input type="text" name ="uname" value="<?php echo $drow['username'];?>"><br>
 
	<label>Email</label> <input type="text" name="uemail" value="<?php echo $drow['email'];?>"><br>
 
 
  <input type="submit" value ="Update" name="btnupdate">
  
  

  </form>
  