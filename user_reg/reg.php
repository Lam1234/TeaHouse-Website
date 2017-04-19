<?php
@header("Content-type:text/html;charset=UTF-8");
if(!isset($_POST['submit'])){
    exit('Access fails!');
}
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//judege the register information
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	
   
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Error ! Invalid user name  . <a href="javascript:history.back(-1);"> Return</a>
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    exit;
}
if(strlen($password) < 6){
    
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Error ! Invalid password .<a href="javascript:history.back(-1);"> Return</a>
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    exit;
    
}
if(!preg_match('/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/', $email)){
   
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Error ! Invalid email .<a href="javascript:history.back(-1);"> Return</a>
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    exit;
}
//contain file of database
include('conn.php');
//Check the user name if it exist
$check_query = mysql_query("select uid from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
    
    
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Error ! <br> User name: '.$username.' exists . <br> <a href="javascript:history.back(-1);">Return</a>
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    
    
    exit;
}
//insert data into database
$password = MD5($password);
$regdate = time();
$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email',
$regdate)";
if(mysql_query($sql,$conn)){
	
    
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Successful ! <a href="loginpage.php">Click here to login</a> .
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    
} else {
   
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Sorry ! Insert data fails： '.mysql_error().'<br />
      <a href="javascript:history.back(-1);"> Click here to try again</a> .;
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
}
?>
