<!DOCTYPE html>
<html lang="en">
<head>
<title>A Walk in the Bark</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="HomePage.css?version=3" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/c91294ea81.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
  <i class="fas fa-dog fa-5x"></i><h1>A Walk in the Bark</h1>
  <p><b>Dog walking</b> in Leeds</p>
  <?php
    session_start();
  if(isset($_SESSION['user'])){    
    echo 'Welcome '.$_SESSION['user'].'<br>';
    
    
    }elseif(isset($_SESSION['admin'])){
    echo 'Welcome '.$_SESSION['admin'].'<br>';
    }
    ?>
</div>


<div class="navbar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Walkers.php"><i class="fa fa-fw fa-paw"></i> Walkers</a>
  <?php
  if(isset($_SESSION['admin'])){
  echo '<a href="adminPage.php"><i class="fa fa-cog fa-spin"></i> Admin</a>';
  }
  ?>
  <a href="Login/loginform.php" class="right"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="profilePage.php" class="right active"><i class="fa fa-fw fa-user"></i> Profile</a>
</div>

  </div>
  <div class="main">
  <div class= "profile-pic">
    <?php
    include 'connection.php';
       $query = "SELECT * FROM dogusers WHERE userName = '$_SESSION[username]' AND userPass = '$_SESSION[password]'";
       //echo $query;
       //exit;
       
       $result=mysqli_query($connection, $query);
       while ($row=mysqli_fetch_assoc($result)){
         $_SESSION['id'] = $row['userID'];
         $email = $row['userEmail'];
         $fname = $row['name'];
         $city = $row['city'];
         $postcode = $row['postcode'];
         $id = $_SESSION['id'];
         $img = $row['Img'];
         //echo $id;
         //exit;
         
         }
    if($img == 0){
       echo "<img src='Images/ProfileDefault.png'>";
       
    } else {
        echo "<img src='Images/Profile".$id.".png' style= height:150px;width:150px;object-fit:cover;>";
        
    }


?>
 </div>   
    <form method="post" action="Login/update.php" style="max-width:30%;margin:auto">
  <h2>Update Profile</h2>
    <div class="errors">
    <?php 
      foreach ($_SESSION['errors'] as $value) {
      echo  "$value <br>";
       }
       
       

      ?>
      </div>
      <b>
  	<label>Email:</label>
  	<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" input type="text" placeholder="Email" name="regEmail" value= "<?php echo $email; ?>" />
  	</div>
    <label>Full Name:</label>
  	<div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input class="input-field" input type="text" placeholder="Full Name" maxlength="30" name="name" value= "<?php echo $fname; ?>" />
  	</div>
  	<label>City:</label>
  	<div class="input-container">
    <i class="fa fa-globe icon"></i>
    <input class="input-field" input type="text" placeholder="City/Town" maxlength="20" name="city" value= "<?php echo $city; ?>" />
  	</div>
  	<label>Outward Postcode:</label>
  	<div class="input-container">
    <i class="	fa fa-address-book icon"></i>
    <input class="input-field" input type="text" placeholder="Postcode (Outward)" maxlength="4" name="postcode" value= "<?php echo $postcode; ?>" />
  	</div>
  	</b>
  	<div class="input-group">
  	  <button type="submit" class='btn' name="upSubmit" value="submit">Update</button>
  	</div>
  	<p>
  		
  	</p>
  </form>
  
  <form action="upload.php" method="post" enctype="multipart/form-data">
  <h2>Update Profile Picture</h2>
    
    <b>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
  </div>
</div>
</b>
<div class="footer">
  <?php
			
			echo '<a href="Login/logout.php">logout</a>' ;
			?>
</div>

</body>
</html>


