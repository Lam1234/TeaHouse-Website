<?php
session_start();

if(!($_SESSION['username']== "Jialiang888")){
	header("Location:./user_reg/loginorreg.php");
	exit();
}


$title = "Upload new image";

$content = '
		<div class="uploadimage-container">
		<div id="uploadheading">
		<h2>Upload Image</h2>
		</div>
		<div id="uploadform">
		<form class="form-inline" action="" method="post" enctype="multipart/form-data">
		
	<div class="form-group">	
    <label for="file">Filename: </label>
    <input type="file"  class="form-control btn btn-default" name="file" id="file">
	
		
		
    <input type="submit" class="form-control" name="submit" value="submit">
		</div>
	</div>
</form>
</div>';

//Check if filetype is a valid format
if (isset($_POST["submit"])) {
    $fileType = $_FILES["file"]["type"];

    if (($fileType == "image/gif") ||
            ($fileType == "image/jpeg") ||
            ($fileType == "image/jpg") ||
            ($fileType == "image/png")) {
        //Check if file exists
        if (file_exists("Images/Coffee/" . $_FILES["file"]["name"])) {
           // echo "File already exists";?>
           
           <script>alert("File already exists")</script>
           <?php 
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "Images/Coffee/" . $_FILES["file"]["name"]);
            echo "Uploaded in " . "Images/Coffee/" . $_FILES["file"]["name"];
        }
    }
}

include './Navigation.php';
include './Template.php';
?>

