<?php
@header("Content-type:text/html;charset=UTF-8");
/*****************************
*Connect to database
*****************************/
$conn = @mysql_connect("localhost","root","123456");
if (!$conn){
    die("Connect failed" . mysql_error());
}
mysql_select_db("coffeedb", $conn);
//change characters, read the database
mysql_query("set character set 'gbk'");
//insert database
mysql_query("set names 'gbk'");
?>
