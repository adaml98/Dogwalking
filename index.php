<!DOCTYPE html>
<html lang="en">
<head>
<title>A Walk in the Bark</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="HomePage.css" rel="stylesheet" type="text/css" />
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
  <a href="index.php" class="active"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Walkers.php"><i class="fa fa-fw fa-paw"></i> Walkers</a>
  <?php
  if(isset($_SESSION['admin'])){
  echo '<a href="adminPage.php"><i class="fa fa-cog fa-spin"></i> Admin</a>';
  }
  ?>
  <a href="Login/loginform.php" class="right"><i class="fa fa-fw fa-user"></i> Login</a>
  <?php 
  
  if(isset($_SESSION['user'])){    
  echo '<a href="profilePage.php" class="right"><i class="fa fa-fw fa-user"></i> Profile</a>';
  }elseif(isset($_SESSION['admin'])){
 echo '<a href="profilePage.php" class="right"><i class="fa fa-fw fa-user"></i> Profile</a>';     
  }
  ?>
</div>

<div class="row">
  <div class="side">
  </div>
</div>

  <section class="hero">

    <div class="hero-content">
    
       <h1 class="hero-title">
            Dog Walking Made Easy
       </h1>
         
       <h2 class="hero-subtitle">
            Welcome to Leed's largest network of dog walkers 
       </h2>
         
       <button type="button" class="hero-button">
            <a href="Walkers.php">Search for walkers &raquo;</a>
       </button>
    
    </div>

</section>
<br>
<br>
<br>
  <h2 style="text-align:center">How to find your perfect dog walker</h2>
 <hr class="dotted">
 <br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fas fa-users"></i></p>
      <h3>Sign Up to be a Dog Walker</h3>
      <p>Sign up today to walk dogs!</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fas fa-search"></i></p>
      <h3>Search Dog Walker</h3>
      <p>Search your local walkers</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fas fa-comments"></i></p>
      <h3>Message your walker</h3>
      <p>Connect with the right walker</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fas fa-handshake"></i></p>
      <h3>Meet up</h3>
      <p>Book and pay your way</p>
    </div>
  </div>
</div>
<br>
<br>
<br>
<div class="columns">
  <ul class="pr">
    <li class="header" style="background-color:dodgerblue">Why use A Walk in the Bark</li>
    <li class="grey">We connect dog owners with trusted local dog lovers</li>
    <li>Choose the dog walker that suits you</li>
    <li>Flexible payment - consult your walker on how you'd like pay</li>
    <li>Discuss with your walker a walk time that suits your needs</li>
  </ul>
</div>
<div class="footer">
  <?php
			
			
  if(isset($_SESSION['user'])){    
    echo '<a href="Login/logout.php">logout</a>' ;
    
    
    }elseif(isset($_SESSION['admin'])){
    echo '<a href="Login/logout.php">logout</a>' ;
    }
			?>
</div>

</script>
</body>
</html>