<?php
session_start();

include './Navigation_loginorreg.php';


$title = "Login or Sign Up";

$content ='
<div class="loginorreg-container">
<fieldset>
<legend>Login or Sign Up</legend>
<form name="LoginorRegForm" class="form-inline" " method=" post" action="" >


<div class="form-group">
<button type="button" class=" btn btn-default" id="buttonlogin"> Login</button>
<button type="button" class=" btn btn-default" id="buttonreg"> Sign Up</button>
</div>



</form>
</fieldset>
</div>';




include '../Template.php';

?>


<script src="../JS/loginorreg.js"></script>

 
<style>
.loginorreg-container{
	text-align: center;
	padding: 10px 200px;
	
}

</style>