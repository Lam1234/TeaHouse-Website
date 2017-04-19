<?php
session_start ();
if(!($_SESSION['username']== "Jialiang888")){
	header("Location:./user_reg/loginorreg.php");
	exit();
}


$title = "Manage Ticket Objects";
include './Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

$content = $coffeeController->CreateTicketOverviewTable();
                              


include './Navigation.php';
include './Template.php';
?>




