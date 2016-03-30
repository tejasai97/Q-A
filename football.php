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
	$club=$_POST['club'];
	$country=$_POST['country'];
	$striker=$_POST['striker'];
	$defender=$_POST['defender'];
mysql_query("UPDATE football SET votes =votes+1 WHERE name = '$club'");
mysql_query("UPDATE football SET votes =votes+1 WHERE name = '$country'");
mysql_query("UPDATE football SET votes =votes+1 WHERE name = '$striker'");
mysql_query("UPDATE football SET votes =votes+1 WHERE name = '$defender'");
	 $result=mysql_query($query);
	 if($result)
	 	 {echo "succesfull";}
	header('location:thankyou.html');
 ?>
