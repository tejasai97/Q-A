<?php
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
	
	
	
	
/*first=$_POST['firstname'];$last=$_POST['lastname'];
	 $query ="INSERT INTO signup(firstname,lastname)VALUES('$first','$last')";
	 $result=mysql_query($query);
	 if($result)
	 {echo "succesfull";}
	else
	{echo "unsuccessfull";}
?>*/