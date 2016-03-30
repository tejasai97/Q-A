<?php
//connecting to database
	$dbname="localhost";
	$dbuser="root";
	$dbpass="";
	$db="test1";
	error_reporting(0);
	
	$init_connection  = mysql_connect($dbname,$dbuser,$dbpass);
	if(!$init_connection){
		die('couldnt connect:'.mysql_error());
	}
	$dbs=mysql_select_db(test1,$init_connection);
	echo "Connected successfully";
	//incrementing vote
	$movies=$_POST['movie'];
	$actor=$_POST['actor'];
	$actress=$_POST['actress'];
	$director=$_POST['director'];
mysql_query("UPDATE movies SET votes =votes+1 WHERE name = '$movies'");
mysql_query("UPDATE movies SET votes =votes+1 WHERE name = '$actor'");
mysql_query("UPDATE movies SET votes =votes+1 WHERE name = '$actress'");
mysql_query("UPDATE movies SET votes =votes+1 WHERE name = '$director'");
	 $result=mysql_query($query);
	 if($result)
	 	 {echo "succesfull";}
	header('location:thankyou.html');
 ?>
