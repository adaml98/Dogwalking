<?php
include 'Login/init.php';
if(!isset($_SESSION['admin'])){
 header ('location:HomePage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>A Walk in the Bark</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="HomePage.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/c91294ea81.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
  <i class="fas fa-dog fa-5x"></i><h1>A Walk in the Bark</h1>
  <p><b>Dog walking</b> in Leeds</p>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar">
  <a href="HomePage.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Walkers.php"><i class="fa fa-fw fa-paw"></i> Walkers</a>
  <a href="adminPage.php" class="active"><i class="fa fa-fw fa-cog"></i> Admin</a>
  <a href="Login/loginform.php" class="right"><i class="fa fa-fw fa-user"></i> Login</a>
  <?php 
  
  if(isset($_SESSION['user'])){    
  echo '<a href="profilePage.php" class="right"><i class="fa fa-fw fa-user"></i> Profile</a>';
  }elseif(isset($_SESSION['admin'])){
 echo '<a href="profilePage.php" class="right"><i class="fa fa-fw fa-user"></i> Profile</a>';     
  }
  ?>
</div>




<div class="footer">
  <?php
			
			echo '<a href="Login/logout.php">logout</a>' ;
			?>
</div>

</body>
</html>