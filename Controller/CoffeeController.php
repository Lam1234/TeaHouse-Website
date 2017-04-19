<script>
//Display a confirmation box when trying to delete an object
function showConfirm(id)
{
    // build the confirmation box
    var c = confirm("Are you sure you wish to delete this item?");
    
    // if true, delete item and refresh
    if(c)
        window.location = "CoffeeOverview.php?delete=" + id;
}
</script>

<?php
require ("Model/TeaHouseModel.php");
require ("Model/GetTicketModel.php");
//Contains non-database related function for the Coffee page
class CoffeeController {

    function CreateOverviewTable() {
        $result = "
    		<div class='tableoverview-container table-responsive'>
    		<h2>Product Overview</h2>
            <table class='table overViewTable'>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Id</b></td>
                    <td><b>Name</b></td>
                    <td><b>Type</b></td>
                    <td><b>Price</b></td>
                    <td><b>Roast</b></td>
                    <td><b>Country</b></td>
                </tr>";

        $coffeeArray = $this->GetCoffeeByType('%');

        foreach ($coffeeArray as $key => $value) {
            $result = $result .
                    "<tr>
                        <td><a href='CoffeeAdd.php?update=$value->id'>Update</a></td>
                        <td><a href='#' onclick='showConfirm($value->id)'>Delete</a></td>
                        <td>$value->id</td>
                        <td>$value->name</td>
                        <td>$value->type</td>    
                        <td>$value->price</td> 
                        <td>$value->roast</td>
                        <td>$value->country</td>   
                    </tr>";
        }

        $result = $result . "</table></div>";
        return $result;
    }
    
    function CreateTicketOverviewTable() {
    	$result = "
    		<div class='tableoverview-container table-responsive'>
            <h2>Tickets Overview</h2>
            <table class='table overViewTable'>
                <tr>
                   
                    <td><b>Id </b></td>
                    <td><b>Number</b></td>
                    <td><b>Gender</b></td>
                    <td><b>Name</b></td>
                    <td><b>Telephone</b></td>
                    <td><b>Email</b></td>
                </tr>";
    
    	$TicketArray = $this->GetTicket('%');
    
    	foreach ($TicketArray as $key => $value) {
    		$result = $result .
    		"<tr>
    
    		<td>$value->ID</td>
    		<td>$value->tickets</td>
    		<td>$value->gender</td>
    		<td>$value->name</td>
    		<td>$value->telep</td>
    		<td>$value->email</td>
    		</tr>";
    	}
    
    	$result = $result . "</table></div>";
    	return $result;
    }

    function CreateCoffeeDropdownList() {
        $coffeeModel = new CoffeeModel();
        $result = " <div class='container-coffee'>
    				<form class='form-inline' action = '' method = 'post' width = '200px'>
                   	<div class='form-group'>
                    <label for='type'>Please select a type:</label> 
                    <select class='form-control' name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($this->GetCoffeeTypes()) .
               			 "</select>
                     <input type = 'submit' class='form-control' value = 'Search' />
        			</div>
                    </form>
    				</div>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }

    function CreateCoffeeTables($types) {
        $coffeeModel = new CoffeeModel();
        $coffeeArray = $coffeeModel->GetCoffeeByType($types);
        $result = "";

        //Generate a coffeeTable for each coffeeEntity in array
        foreach ($coffeeArray as $key => $coffee) {
            $result = $result .
                    "<div class = 'container-coffee'>
    				<div class='table-responsive'>
    				<table class = 'table coffeeTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$coffee->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$coffee->name</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$coffee->type</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$coffee->price</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$coffee->roast</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$coffee->country</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$coffee->review</td>
                        </tr>                      
                     </table>
                     </div>
                    </div>";
        }
        return $result;
    }

    //Returns list of files in a folder.
    function GetImages() {
        //Select folder to scan
        $handle = opendir("Images/Coffee");

        //Read all files and store names in array
        while ($image = readdir($handle)) {
            $images[] = $image;
        }

        closedir($handle);

        //Exclude all filenames where filename length < 3
        $imageArray = array();
        foreach ($images as $image) {
            if (strlen($image) > 2) {
                array_push($imageArray, $image);
            }
        }

        //Create <select><option> Values and return result
        $result = $this->CreateOptionValues($imageArray);
        return $result;
    }

    //<editor-fold desc="Set Methods">
    function InsertCoffee() {
        $name = $_POST["txtName"];
        $type = $_POST["ddlType"];
        $price = $_POST["txtPrice"];
        $roast = $_POST["txtRoast"];
        $country = $_POST["txtCountry"];
        $image = $_POST["ddlImage"];
        $review = $_POST["txtReview"];

        $coffee = new CoffeeEntity(-1, $name, $type, $price, $roast, $country, $image, $review);
        $coffeeModel = new CoffeeModel();
        $coffeeModel->InsertCoffee($coffee);
    }

    function UpdateCoffee($id) {
        $name = $_POST["txtName"];
        $type = $_POST["ddlType"];
        $price = $_POST["txtPrice"];
        $roast = $_POST["txtRoast"];
        $country = $_POST["txtCountry"];
        $image = $_POST["ddlImage"];
        $review = $_POST["txtReview"];

        $coffee = new CoffeeEntity($id, $name, $type, $price, $roast, $country, $image, $review);
        $coffeeModel = new CoffeeModel();
        $coffeeModel->UpdateCoffee($id, $coffee);
    }

    function DeleteCoffee($id) 
    {
        $coffeeModel = new CoffeeModel();
        $coffeeModel->DeleteCoffee($id);
    }

    //</editor-fold>
    //<editor-fold desc="Get Methods">
    function GetCoffeeById($id) {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeById($id);
    }

    function GetCoffeeByType($type) {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeByType($type);
    }
    
    function GetTicket($type) {
    	$getticketModel = new GetTicketModel();
    	return $getticketModel->GetTicket($type);
    }
    
    function GetCoffeeTypes() {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeTypes();
    }

    //</editor-fold>
}
?>
