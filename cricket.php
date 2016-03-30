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
	$team=$_POST['team'];
	$batsman=$_POST['batsman'];
	$bowler=$_POST['bowler'];
	$allrounder=$_POST['allrounder'];
mysql_query("UPDATE cricket SET votes =votes+1 WHERE name = '$team'");
mysql_query("UPDATE cricket SET votes =votes+1 WHERE name = '$batsman'");
mysql_query("UPDATE cricket SET votes =votes+1 WHERE name = '$bowler'");
mysql_query("UPDATE cricket SET votes =votes+1 WHERE name = '$allrounder'");
	 $result=mysql_query($query);
	 if($result)
	 	 {echo "succesfull";}
	header('location:thankyou.html');
 ?>
