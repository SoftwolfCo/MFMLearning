<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>MFM Learning Login</title>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
  
<header class="w3-container w3-red">
  <h1>MFM Learning - Student Login</h1>
</header>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form class="w3-container w3-card-4" id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>MFM Learning Login</legend>

<div>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* Required Fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' class="w3-label w3-validate" >Username: *</label><br/>
    <input type='text' name='username' id='username' class="w3-input" value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' class="w3-label w3-validate" >Password: *</label><br/>
    <input type='password' name='password' id='password' class="w3-input" maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input class="w3-btn w3-section w3-teal w3-ripple" type='submit' name='Submit' value='Submit' />
    <a class="w3-btn w3-section w3-teal w3-ripple" href="../index.php">Go Back</a>
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
  </div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>