<!DOCTYPE html>
<html>
<title>MFM Learning</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/w3.css">
<body>

<header class="w3-container w3-red">
  <h1>MFM Learning - Teacher Login</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

<form class="w3-container w3-card-4"  id='login' action='login.php' method='post' accept-charset='UTF-8'>
  
<input type='hidden' name='submitted' id='submitted' value='1'/>

<p>
<input class="w3-input" type="text" style="width:90%" required id='username'  maxlength="50" >
<label class="w3-label w3-validate">Username</label></p>
<p>
<input class="w3-input" type="password" style="width:90%" required id='password' maxlength="50" >
<label class="w3-label w3-validate">Password</label></p>

<p>
<input id="milk" class="w3-check" type="checkbox" checked="checked">
<label class="w3-validate">Stay logged in</label></p>

<p>
<button class="w3-btn w3-section w3-teal w3-ripple"> Log in </button></p>

</form>
  
<a class="w3-btn w3-section w3-red w3-ripple" href="./index.php">Go Back</a></p>
<a class="w3-btn w3-section w3-red w3-ripple" href="./login.php">Student Login</a></p>

</div>

</body>
</html> 
