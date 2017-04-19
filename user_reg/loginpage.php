<?php
session_start();





include './Navigation_loginorreg.php';
$title = Login;

$content = '
<div class="login-container">
<fieldset>
<legend>Login</legend>
<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label">User Name:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">Password:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  Comfirm " class="left" />
</p>
</form>
</fieldset>
</div>';


include '../Template.php';
?>


<script language=JavaScript>

function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("Please input your user name!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("Please input the password!");
    LoginForm.password.focus();
    return (false);
  }
}

</script>

<script src="../JS/loginorreg.js"></script>

<style>
.login-container{
	text-align: center;
	padding: 10px 200px;
	font-size: 20px;
}
label{
background-color:red;
}
</style>
