<?php
session_start ();
if(!($_SESSION['username']== "Jialiang888")){
	header("Location:./user_reg/loginorreg.php");
	exit();
}





$title = "Manage Product Objects";
include './Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

$content = $coffeeController->CreateOverviewTable();

if(isset($_GET["delete"]))
{
    $coffeeController->DeleteCoffee($_GET["delete"]);
}

include './Navigation.php';
include './Template.php';      
?>
