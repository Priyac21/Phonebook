<?php
require_once 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
?>
<div class="menu">  
   <ul>
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="add_user.php">Add New</a>
      <li><a href="view_user.php">View All</a><?php echo '<p class= "count">'.$row.'</p>';?>
      <li><a href="#">Profile</a>
         <ul>
            <li><a href="viewProfile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
   </ul>
</div>  