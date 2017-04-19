<?php
session_start ();
$navigation = '<nav class="navbar navbar-default " data-spy="affix" data-offset-top="230" id="navigation">
			<div class="container-fluid" id="567">
			
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
        				<li ><a href="index.php">Home</a></li>
        				<li ><a href="Coffee.php">Product Details</a></li>
        				<!--<li><a href="#">Shop</a></li>
        				<li><a href="#">About</a></li>-->
		           </ul>';

if (isset ( $_SESSION ['username'] )) {
	$navigation = $navigation . '
			                    <ul class="nav navbar-nav navbar-right">
 								<li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="./user_reg/loginorreg.php" id="link111">';
	
	$navigation = $navigation . 'Welcome ' . $_SESSION [username];
	$navigation = $navigation . '<span class="caret"></span></a>';

		if(	 $_SESSION ['username']== "Jialiang888"){
			$navigation = $navigation .
			'<ul class="dropdown-menu">
			<li><a href="./Management.php">Management Center</a></li>
			<li><a href="./user_reg/login.php?action=logout">Logout</a></li>
			
			</ul>
			
			
			</li>';
		}
			else{
				$navigation = $navigation .
			
			
 			 					'<ul class="dropdown-menu">
            						<li><a href="./user_reg/my.php">User Center</a></li>
           						 	<li><a href="./user_reg/login.php?action=logout">Logout</a></li>
            
          						</ul>
 			
 			
 						</li>';

			
			
			} 

}
else {
	
	$navigation = $navigation . '
			                    <ul class="nav navbar-nav navbar-right">
 								<li><a href="./user_reg/loginorreg.php" id="link111">';
	$navigation = $navigation . 'Login/Register</a></li>';
}

$navigation = $navigation . '

		            		
		            		
      				</ul>
     
    			</div>
 			 </div>
		</nav>
		
		
		
		
		';

?>

<style>
#link111{
	float:right;
	color:red;
	
}

</style>