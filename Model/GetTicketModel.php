<?php
require ("Entities/TicketEntity.php");

// Open connection and Select database.

// define variables and set to empty values

class GetTicketModel {
		function GetTicket($type){
		require ('Credentials.php');
		//$host = "localhost";
		//$user = "root";
		//$passwd = "123456";
		//$database = "coffeedb";
		
		$con =  @mysql_connect ( $host, $user, $passwd );


                  if(!$con){

                 die ( mysql_error () );
                 } 
                 
                 
		mysql_select_db ( $database, $con );
		
		$query = " SELECT * FROM bootstraptest ";
		
		$result = mysql_query($query) or die(mysql_error());
        $TicketArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $ID = $row[0];
            $tickets = $row[1];
            $gender = $row[2];
            $name = $row[3];
            $telep = $row[4];
            $email = $row[5];
          

            //Create coffee objects and store them in an array.
            $ticket = new TicketEntity($ID, $tickets, $gender, $name, $telep, $email);
            array_push($TicketArray, $ticket);
        }
        //Close connection and return result
        mysql_close();
        return $TicketArray;
		}
}
	
?>