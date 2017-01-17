-<!DOCTYPE html>
<html>
<head>
  <title>MFM Learning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/custom.css">
  <link rel="stylesheet" href="./css/w3.css">
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
    <li class="w3-hide-small"><a href="./login.php" class="w3-padding-large w3-hover-white">Login</a></li>
    <li class="w3-hide-small"><a href="#join" class="w3-padding-large w3-hover-white">Sign Up</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#about">About</a></li>
      <li><a class="w3-padding-large" href="./price.php">Pricing</a></li>
      <li><a class="w3-padding-large" href="./login.php">Login</a></li>
      <li><a class="w3-padding-large" href="#join">Sign Up</a></li>
    </ul>
  </div>
</div>
  
<div class="w3-row-padding w3-container w3-center" id="price">

<div class="w3-second w3-margin-bottom">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">Pricing</li>
    <li class="w3-padding-16"><b>Unlimted</b> Students</li>
    <li class="w3-padding-16"><b>Unlimted</b> Teachers</li>
    <li class="w3-padding-16"><b>1</b> Class</li>
    <li class="w3-padding-16"><b>Endless</b> Support</li>
    <li class="w3-padding-16"><b>Full</b> Access</li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">$ 2</h2>
      <span class="w3-opacity">per month</span>
    </li>
    <li class="w3-light-grey w3-padding-24">
      <a class="w3-btn w3-green w3-padding-large" href="#join">Sign Up</a>
    </li>
  </ul>
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
</script>

</body>
</html>
