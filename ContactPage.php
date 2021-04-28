<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="contact.css?version=2" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="navbar">
  <a href="HomePage.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Walkers.php"><i class="fa fa-fw fa-paw"></i> Walkers</a>
  <?php
  if(isset($_SESSION['admin'])){
  echo '<a href="adminPage.php"><i class="fa fa-cog fa-spin"></i> Admin</a>';
  }
 ?>
  <a href="Login/loginform.php" class="right"><i class="fa fa-fw fa-user"></i> Login</a>
</div>
  

<div class="container">
  <div style="text-align:center">
    <h2>Contact Your Dog Walker</h2>
    <p>Find the right dog walker for you, then give them a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <div class= "profile-pic">
    <?php
    include 'connection.php';
       $id = $_GET['id'];
       $query = "SELECT * FROM dogusers WHERE userID = $id";
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
         //echo $img;
         //exit;
         
         }
    if($img == 0){
       echo "<img src='Images/ProfileDefault.png'>";
       echo'</br>';
    } else {
        echo "<img src='Images/Profile".$id.".png' style= height:150px;width:150px;object-fit:cover;>";
        echo'</br>';
    }
    
    echo $fname;
    echo'</br>';
    echo $email;
    echo'</br>';
    echo $city;
    echo'</br>';
    echo $postcode;
    echo'</br>';



?>
 </div>

</div>
<br>

<div style="text-align:center">
  
</div>



    </div>
    <div class="column">
      <form method="post" action="ContactPage.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your E-mail..">
        <label for="mnumber">Mobile Number</label>
        <input type="text" id="mnumber" name="mobilenumber" placeholder="Your Mobile number..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something about your dog.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submitBook"/>
      </form>
    </div>
  </div>
</div>
  <?php
      if(isset($_POST['submitBook'])){
    if(empty($_POST['email'])){
        echo 'Please complete form';
        }else{
           
           echo "Email successfully sent!";
   
    }
}
?>
</body>

