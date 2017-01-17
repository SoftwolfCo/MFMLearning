-<!DOCTYPE html>
<html>
<head>
  <title>MFM Learning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/custom.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
  </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top w3-red">
  <ul class="w3-navbar w3-red w3-card-2+ w3-large w3-left">
  <li><a href="./index.php" class="w3-padding-large w3-hover-white">MFM Learning</a></li>
  </ul>
  <ul class="w3-navbar w3-red w3-card-2+ w3-large w3-right">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li class="w3-hide-small"><a href="#about" class="w3-padding-large w3-hover-white">About</a></li>
    <li class="w3-hide-small"><a href="./price.php" class="w3-padding-large w3-hover-white">Pricing</a></li>
    <li class="w3-hide-small"><a href="./login/login.php" class="w3-padding-large w3-hover-white">Login</a></li>
    <li class="w3-hide-small"><a href="./price.php#join" class="w3-padding-large w3-hover-white">Sign Up</a></li>
     <li class="w3-hide-small"><a href="./login/account.php" class="w3-padding-large w3-hover-white">My Account</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#about">About</a></li>
      <li><a class="w3-padding-large" href="./price.php">Pricing</a></li>
      <li><a class="w3-padding-large" href="./login/login.php">Login</a></li>
      <li><a class="w3-padding-large" href="./price.php#join">Sign Up</a></li>
      <li><a class="w3-padding-large" href="./login/account.php">My Account</a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">Made for Me Learning</h1>
  <p class="w3-xlarge">A new and experimental way of teaching</p>
  <button class="w3-btn w3-padding-16 w3-large w3-margin-top">Get Started</button>
</header>
  <div class="dropdown w3-left">
  <button class="dropbtn w3-padding-16 w3-large w3-margin-top">Select Subject</button>
  <div class="dropdown-content">
    <a href="#">Math</a>
    <a href="#">Sience</a>
    <a href="#">Heath</a>
    <a href="#">Music</a>
     <a href="#">History</a>
    <a href="#">Geography</a>
     <a href="#">Drama</a>
     <a href="#">Coding</a>
     <a href="#">Other</a>
  </div>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Maid For You</h1>
      <h5 class="w3-padding-32"> Made for me learing was made to create a custom learing experience for each student due to, 
        in a normal class things areat the right pace for about one student of the 30 in the class. For the rest they cant 
      understand it due to missing information or is boring and holdin them back due to them allready knowing what is being tolled
      to them </h5>

      <p class="w3-text-grey"> we fix this with our system by having a easy way to see explanations and problems in any way 
      they see fit and with the learing style test they and there teacher can know what helps them learn and with a test after
        every activity it allows the sudent and techer to see and focus on what they strugule in </p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-Tablet w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>How We Will Help</h1>
      <h5 class="w3-padding-32">We have made a system that tells to the teacher and student what they strugle and achive in and makes the leason arond that so it dose not hold back the best and britest and 
      does not march on relentlessly leaving people behind like the nornal non flexible curiculum. </h5>

      <p class="w3-text-grey">This was made by Alcide Viau and Joshua Chamberlain so we can help our fellow student and not be bored in class lising to stuff we allready know</p>
    </div>
  </div>
</div>
  
<div class="w3-row-padding w3-container w3-center" id="price">

<div class="w3-second w3-margin-bottom">
</div>

</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge" id="join">Beta Access Coming Soon</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
  
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

</body>
</html>
