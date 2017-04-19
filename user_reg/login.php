<?php
session_start();

?>


<?php 

//Logout
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		You successfully logged out!<br> Please click here to <a href="loginpage.php">login</a> .
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
    exit;
}

//Login
if(!isset($_POST['submit'])){
    exit('Access fails!');
    
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//contian the file of database
include('conn.php');
//Dectect the user name and password right or not
$check_query = mysql_query("select uid from user where username='$username' and password='$password' 
limit 1");
if($result = mysql_fetch_array($check_query)){
    //Login successful
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    
    //lack password validate
    if (($username == "Jialiang888")){
    	
    	$content = '
    		
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		
    		Welcome into <a href="../Management.php">Management Center </a> !<br>
    		Click here to<a href="login.php?action=logout"> logout </a> .
    		</div>
    		';
    	if(isset($_SESSION['username'])){
    		 
    		//echo '<a href="test1.php"> loginorreg('.$_SESSION['username'].')</a>';
    		 
    		//$content= $_SESSION['username'];
    		 
    		include './Navigation_loginorreg.php';
    		include '../Template.php';
    	
    	
    	}
    	
    }
    
    else{
    $content = ' 
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Hi '.$username. '<br>Welcome into <a href="my.php">user center </a> ! <br>
    		Click here to<a href="login.php?action=logout"> logout </a> .
    		</div>';

 
    //test
    if(isset($_SESSION['username'])){
    	
    	//echo '<a href="test1.php"> loginorreg('.$_SESSION['username'].')</a>';
    	
    	//$content= $_SESSION['username'];
    	
    	include './Navigation_loginorreg.php';
        include '../Template.php';
        
      
    }
    //test
    
    exit;
    }
} else {
    
    		
    $content= '
    		<div class="text-center" style="font-weight:bold; font-size: 25px; padding:30px;">
    		Logon Failure! <br><a href="javascript:history.back(-1);">Click here to try again.</a> .
    		</div>';
    include './Navigation_loginorreg.php';
    include '../Template.php';
}



?>

  
