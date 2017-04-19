<?php
	$username = $_POST['username'];
	
	if(!eregi("^[a-z0-9_]+$", $username)){
		echo "name error！".$username;
	} else {
		echo "name corret！";
	}
?>