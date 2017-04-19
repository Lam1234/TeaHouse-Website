<?php 
session_start();
$navigation='<nav class="navbar navbar-default " id="navigation">
			<div class="container-fluid">
			
    			<div class="navbar-header">
     				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
       					<span class="icon-bar"></span>
       					<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="#">Teahouse</a>
    			</div>
    			
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav">
        				<li ><a href="../index.php">Home</a></li>
        				<li ><a href="../Coffee.php">Product Details</a></li>
        				<!--<li><a href="#">Shop</a></li>		
        				<li><a href="#">About</a></li>-->
		            </ul>';
        				

        				if (isset ( $_SESSION ['username'] )) {
	$navigation = $navigation . '<ul class="nav navbar-nav navbar-right">
 								<li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="./user_reg/loginorreg.php" id="link111">';
	
	$navigation = $navigation . 'Welcome ' . $_SESSION [username];
	$navigation = $navigation . '<span class="caret"></span></a>';
	
 			if(	 $_SESSION ['username']== "Jialiang888"){
			$navigation = $navigation .
			'<ul class="dropdown-menu">
			<li><a href="../Management.php">Management Center</a></li>
			<li><a href="./login.php?action=logout">Logout</a></li>
			
			</ul>
			
			
			</li>';
		}
			else{
				$navigation = $navigation .
			
			
 			 					'<ul class="dropdown-menu">
            						<li><a href="./my.php">User Center</a></li>
           						 	<li><a href="./login.php?action=logout">Logout</a></li>
            
          						</ul>
 			
 			
 						</li>';

			
			
			} 

}
else {
	
	$navigation = $navigation . '
			                <ul class="nav navbar-nav navbar-right">
 								<li><a href="./loginorreg.php" id="link111">';
	$navigation = $navigation . 'Login/Register</a></li>';
}

$navigation = $navigation . '

		            		
		            		
      				</ul>
     
    			</div>
 			 </div>
		</nav>
		
		
		';

//$navigation= $navigation .$_SESSION[username];
//$navigation = $navigation."99999";
?>

<style>
.navbar {
	margin-bottom: 0;
	background-color: #ffffff;
	border: 0;
	font-size: 18px !important;
	letter-spacing: 3px;
	/*opacity: 0.9;*/
	padding: 10px 10px;
	font-weight: bold;

}

.navbar-brand {
	font-size: 22px !important;

}
/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand {
	color: #444444 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
	color: #77b300!important; /*green*/
}

/* The active link */
.navbar-nav li.active a {
	color: #fff !important;
	background-color: #29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
	border-color: transparent;
}



/* Dropdown */
.open .dropdown-toggle {
	color: #fff ;
	/*background-color: #555 !important;*/
}

/* Dropdown links */
.dropdown-menu li a {
	color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
	background-color: #3399ff!important; /*blue*/
	color: #444444 !important; /*black*/
}
</style>