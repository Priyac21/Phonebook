<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>Vieiw Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <div id="main">
  
  <h1> Phone Book</h1>
  <?php  include_once 'menu-main.php';?>
  
    <p class="prof"> User Profile</p>
   <table class=" viewtabl" >
  <th>
  <tr>
  
  <td><strong>Name</strong></td>
  <td><strong>Username</strong></td>
  <td><strong>email</strong></td>
  
  <td>Action</td>
  </tr>
  </th>
  <?php  //https://www.formget.com/update-data-in-database-using-php/  to display table in echo 
  //echo $_SESSION['contact_id'];
   require_once 'db.php';
   
   $query = "SELECT * FROM userdetails where contact_id= '".$_SESSION['contact_id']."'";
    $result = mysqli_query($dbcon,$query);
	 $row = @mysqli_fetch_assoc($result)?>
  
  
  <tr>
  
  <td> <?php echo $row["name"];?></td>
  <td><?php echo $row["username"];?></td>
  <td><?php echo $row["email"];?></td>
  
  <td>
  
 <a href="editProfile.php?editProfile=<?php echo $row["contact_id"]; ?> "id="edt">Edit</a>
  </td>
  </tr>

	 </table>
	   </div>
</body>
</html>
