<?php
session_start();

if(!($_SESSION['username']== "Jialiang888")){
	header("Location:./user_reg/loginorreg.php");
	exit();
}
$title = "Management";

$content = '<div class="management-title">
		    <h3>Management Center</h3>
		    
		    <div class="container-management  btn-group-vertical btn-group-lg" id="managementgroup">
            <a href="CoffeeAdd.php"  class="btn btn-primary">Add a new product</a>
            <a href="uploadImage.php"  class="btn btn-primary">Upload Image</a>
            <a href="CoffeeOverview.php"  class="btn btn-primary">Product Overview</a>
            <a href="TicketOverview.php"  class="btn btn-primary">Ticket Overview</a>
		    <a href="./user_reg/login.php?action=logout"  class="btn btn-primary"> logout </a> 
            </div>
		    </div>
		
		
		';
            
include './Navigation.php';
include './Template.php';
?>
