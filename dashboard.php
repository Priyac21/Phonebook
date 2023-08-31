<?php
session_start();

require 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
	
?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "main">
  <h1> Phone Book</h1>
  <?php echo '<p class="loged">Logged in as <span>' .$_SESSION['username']. '</span></p>';
  
  include_once 'menu-main.php';
  ?>
  

 <div class=" totalcontact"> <p>Total users in your contacts<br> <?php echo '<span>'. $row.'</span>';?></p></div>
  <div class= "addnew"><a href=""></a> </div> 
  <div class= "viewusers"><a href="view_user.php"></a> </div> 
  
  
</div>
</body>
</html>
