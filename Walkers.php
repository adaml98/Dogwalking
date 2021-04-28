<!DOCTYPE html>
<html lang="en">
<head>
<title>A Walk in the Bark</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Walkers.css" rel="stylesheet" type="text/css" />
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
  <a href="HomePage.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Walkers.php" class="active"><i class="fa fa-fw fa-paw"></i> Walkers</a>
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
  
  <div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/small-dog-breeds-lead-1550631680.jpg?crop=0.669xw:1.00xh;0.220xw,0&resize=640:*" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="https://i.pinimg.com/736x/ff/37/07/ff3707bab3f8848f5d9fdfe04246af80.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="https://cml.sad.ukrd.com/image/663026-640x640.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="https://images.squarespace-cdn.com/content/v1/5841e2e715d5dbb709ebf807/1579086733074-BBI6470EHECLWSUW4ZNP/ke17ZwdGBToddI8pDm48kEpVg-ILAPna1wRh-xAJ9fRZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpwEv36x-EUL2-BSQ5feDhwGCbXuJBFqZ-erYzVouT8yOb9TwqchglLQOCYTRn7ZGxI/image-asset.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="https://www.lindores.co.uk/wp-content/uploads/2019/07/9f45a8a9-5150-4f7f-88b3-505f34473511.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/beagle-with-treat-royalty-free-image-172977570-1559147501.jpg?crop=0.665xw:1.00xh;0.119xw,0&resize=640:*" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/small-dog-breeds-lead-1550631680.jpg?crop=0.669xw:1.00xh;0.220xw,0&resize=640:*" style="width:100%" onclick="currentSlide(1)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://i.pinimg.com/736x/ff/37/07/ff3707bab3f8848f5d9fdfe04246af80.jpg" style="width:100%" onclick="currentSlide(2)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cml.sad.ukrd.com/image/663026-640x640.jpg" style="width:100%" onclick="currentSlide(3)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://images.squarespace-cdn.com/content/v1/5841e2e715d5dbb709ebf807/1579086733074-BBI6470EHECLWSUW4ZNP/ke17ZwdGBToddI8pDm48kEpVg-ILAPna1wRh-xAJ9fRZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpwEv36x-EUL2-BSQ5feDhwGCbXuJBFqZ-erYzVouT8yOb9TwqchglLQOCYTRn7ZGxI/image-asset.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.lindores.co.uk/wp-content/uploads/2019/07/9f45a8a9-5150-4f7f-88b3-505f34473511.jpg" style="width:100%" onclick="currentSlide(5)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/beagle-with-treat-royalty-free-image-172977570-1559147501.jpg?crop=0.665xw:1.00xh;0.119xw,0&resize=640:*" style="width:100%" onclick="currentSlide(6)" alt="Take A Look at the #AWalkInTheBark Community">
    </div>
  </div>
</div>

  </div>
  <div class="main">
  
  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<h1>View Walkers Profiles</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Postcode.." title="Type in a postcode">
  <div class="table" >
<?php
//Make connection to database
include 'connection.php';
//create a query to select all records from products table
$query = "SELECT * FROM dogusers";
//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
echo '<table id="myTable">';
echo "<th> Walker </th>";
echo "<th> City </th>";
echo "<th> Postcode </th>";
while ($row=mysqli_fetch_assoc($result)){
echo '<tr>';
echo '<td style="width:40%;"><a href= "ContactPage.php?id='.$row['userID'].'" class="rowlink">'.$row['name'].'</td><td>'.$row['city'].'</td><td>'.$row['postcode']."</td>";
echo '</tr>';
}
echo '</table>';
echo '<br/>';
//ProductName, ProductPrice, ProductImageName.
?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}






</script>
</div>
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
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>