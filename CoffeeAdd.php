<?php
session_start ();

if(!($_SESSION['username']== "Jialiang888")){
	header("Location:./user_reg/loginorreg.php");
	exit();
}


require './Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

$title = "A New Product";

if(isset($_GET["update"]))
{
    $coffee = $coffeeController->GetCoffeeById($_GET["update"]);
    
    
    $content ="
    		<div class='updatecoffee-container'>
    		<form action='' method='post'>
   
         <fieldset>
        <legend>Update A New Product</legend>
        <div class='form-group'>
        <label for='name'>Name: </label>
        <input type='text' class='form-control inputField' name='txtName' value='$coffee->name'  /><br/>
        </div>
        
        <div class='form-group'>
        <label for='type'>Type: </label>
        <select class='form-control inputField' name='ddlType'>
            <option value='%'>All</option>"
        .$coffeeController->CreateOptionValues($coffeeController->GetCoffeeTypes()).
        "</select><br/>
         </div>
        
        <div class='form-group'>
        <label for='price'>Price: </label>
        <input type='text' class='form-control inputField' name='txtPrice' value='$coffee->price'/><br/>
        </div>
        
        
        <div class='form-group'>
        <label for='roast'>Roast: </label>
        <input type='text' class='form-control inputField' name='txtRoast' value='$coffee->roast' /><br/>
        </div>
         
        
        <div class='form-group'>
        <label for='country'>Country: </label>
        <input type='text' class='form-control inputField' name='txtCountry' value='$coffee->country' /><br/>
        </div>
 
        <div class='form-group'>
        <label for='image'>Image: </label>
        <select class='form-control inputField' name='ddlImage'>"
        .$coffeeController->GetImages().
        "</select></br>
        </div>

        <div class='form-group'>
        <label for='review'>Review: </label>
        <textarea class='form-control'  cols='70' rows='12' name='txtReview'>$coffee->review</textarea></br>
        </div>
        
        <input type='submit' value='Submit'>
   </fieldset>
</form>
    
    </div>";
}
 else 
{
    $content ="
    		<div class='addcoffee-container'>
    		<form action='' method='post'>
    <fieldset>
        <legend>Add A New Product</legend>
    	
    	<div class='form-group'>
        <label for='name'>Name: </label>
        <input type='text' class='form-control inputField' name='txtName' /><br/>
        </div>
    	
    	<div class='form-group'>
        <label for='type'>Type: </label>
        <select class='form-control inputField' name='ddlType'>
            <option value='%'>All</option>"
        .$coffeeController->CreateOptionValues($coffeeController->GetCoffeeTypes()).
        "</select><br/>
        </div>

        <div class='form-group'>		
        <label for='price'>Price: </label>
        <input type='text' class='form-control inputField' name='txtPrice' /><br/>
        </div>
        		
        <div class='form-group'>		
        <label for='roast'>Roast: </label>
        <input type='text' class='form-control inputField' name='txtRoast' /><br/>
        </div>
        		
        <div class='form-group'>		
        <label for='country'>Country: </label>
        <input type='text' class='form-control inputField' name='txtCountry' /><br/>
        </div>

        <div class='form-group'>		
        <label for='image'>Image: </label>
        <select class='form-control inputField' name='ddlImage'>"
        .$coffeeController->GetImages().
        "</select></br>
        </div>
        		
        <div class='form-group'>		
        <label for='review'>Review: </label>
        <textarea class='form-control' cols='70' rows='12' name='txtReview'></textarea></br>
        </div>
        		
        <input type='submit' value='Submit'>
    </fieldset>
</form>
</div>";
}


if(isset($_GET["update"]))
{
    if(isset($_POST["txtName"]))
    {
        $coffeeController->UpdateCoffee($_GET["update"]);
    }
}
else
{
    if(isset($_POST["txtName"]))
    {
        $coffeeController->InsertCoffee();
    }
}

include './Navigation.php';
include './Template.php';
?>


