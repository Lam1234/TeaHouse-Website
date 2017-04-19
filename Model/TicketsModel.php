
<?php
// require ('Model/Credentials.php');
// require ('bsvalideform.php');
// Open connection and Select database.
require ('Credentials.php');
// define variables and set to empty values

		$varb = $_POST['tickets'];
		$varc = $_POST['gender'];
		$vard = $_POST['name'];
		$vare = $_POST['telep'];
		$varf = $_POST['email']; 
		
		//echo "MODEL:tickets".$varb;
		//echo "gender".$varc;
		//echo"name".$vard;
		//echo  "telep".$vare;
		//echo "email".$varf;
		//echo "123";
		
		//$host = "localhost";
		//$user = "root";
		//$passwd = "123456";
		//$database = "coffeedb";
		
		if(($_POST[tickets]== "")||($_POST[gender]=="")||($_POST[name]== "")||($_POST[telep]=="")||($_POST[email]=="")){
			//echo "ttt";
			
			
		}else{
			
		  $con= @mysql_connect($host, $user, $passwd);
			if(!$con){
				die("Connect failed" .mysql_error());
			}	
			
			
	
		mysql_select_db ( $database, $con );
		
		$sql = " INSERT INTO bootstraptest ( tickets, gender, name, telep, email) VALUES
('$_POST[tickets]','$_POST[gender]','$_POST[name]','$_POST[telep]','$_POST[email]')";
		
		if (! mysql_query ( $sql, $con )) 

		{
			
			die ( 'Error: ' . mysql_error () );
		}
	 
	 
	
		echo ("Thank you for your booking!");
		
		// Close connection and return result.
		mysql_close ( $con );
		}
	
?>