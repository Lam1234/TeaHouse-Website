<?php 
session_start();
$content='
		
<div class="reg-container">
<fieldset>
<legend class="text-center">Sign Up</legend>
		
<form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">
		
<div class="form-group">		
<label for="username" class="label">User name:</label>
<input id="username" name="username" type="text" class="input form-control" />
<span>* 3-15 characters (letters, numbers and space)</span>
</div>
		
<div class="form-group">	
<label for="password" class="label">Password:</label>
<input id="password" name="password" type="password" class="input form-control" />
<span>* min 6 characters</span>
</div>
		
<div class="form-group">	
<label for="repass" class="label">Confirm password:</label>
<input id="repass" name="repass" type="password" class="input form-control" />
</div>
		
<div class="form-group">	
<label for="email" class="label">Email:</label>
<input id="email" name="email" type="text" class="input form-control" />
<span></span>
</div>
		
<div class="form-group">	
<input type="submit" name="submit" value="  Submit  " class="left" />
</div>
</form>
</fieldset>
</div>';

include './Navigation_loginorreg.php';
include '../Template.php';


?>

<style>
.reg-container{
	text-align: left;
	padding: 10px 200px;
	font-size: 20px;
}

label{


background-color:red;
}

 span{


}
</style>

<script language=JavaScript>


function InputCheck(RegForm)
{
  if (RegForm.username.value == "")
  {
    alert("Please input the user name !");
    RegForm.username.focus();
    return (false);
  }
  if (RegForm.password.value == "")
  {
    alert("Please input the password !");
    RegForm.password.focus();
    return (false);
  }
  if (RegForm.repass.value != RegForm.password.value)
  {
    alert("The comfirm password is not the same with the original one !");
    RegForm.repass.focus();
    return (false);
  }
  if (RegForm.email.value == "")
  {
    alert("Please input the email !");
    RegForm.email.focus();
    return (false);
  }
}


</script>

<script src="../JS/loginorreg.js"></script>