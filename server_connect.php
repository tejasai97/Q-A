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
	$date1 = str_replace("/", "-", $_POST['date']);
	$first=$_POST['firstname'];$last=$_POST['lastname'];$pass=($_POST['pass']);$_dob=date('Y-m-d',strtotime($date1));$nick=$_POST['nick'];
	 $query ="INSERT INTO signup(firstname,lastname,password,dob,answer)VALUES('$first','$last','$pass','$_dob','$nick')";
	 $result=mysql_query($query);
	 if($result)
	 {echo "succesfull";}
	header('location:login page.html');
?>