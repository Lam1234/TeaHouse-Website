<?php
session_start();

//Detect if it is login, if not, go to login page
if(!isset($_SESSION['userid'])){
    header("Location:loginorreg.php");
    exit();
}

//contain the file of database
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$row = mysql_fetch_array($user_query);

$content='
		<div class="text-center" style=" padding:30px;">
		<div class="" style="padding-bottom:20px;">
		<h2>User information</h2> 
		</div>
		<div style=" margin:auto; border-style: solid; border-color: blue; font-size: 20px;">
		  User ID: '.$userid.'<br /> 
		  User name: '.$username.'<br /> 
		  Email: '.$row['email'].'<br />
		  Register date: '.date("Y-m-d", $row['regdate']).'<br /> 
		  <a href="login.php?action=logout">Click here to logout</a><br />
		  		</div>
		 
		  		</div>';

if(isset($_SESSION['username'])){
    	
    	//echo '<a href="test1.php"> loginorreg('.$_SESSION['username'].')</a>';
    	
    	//$content= $_SESSION['username'];
    	
    	include './Navigation_loginorreg.php';
        include '../Template.php';
        
      
    }
?>
