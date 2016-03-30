<?php
//server connection
 define('DB_HOST', 'localhost'); 
define('DB_NAME', 'test1');
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//checking in database
 $username=$_POST['user'];
 $answer=$_POST['ans'];
 
 $sql="SELECT * FROM signup WHERE firstname='$username' and answer='$answer'";
 $result=mysql_query($sql);
while($row =mysql_fetch_array($result)){
	echo "your password is:";
	echo $row["password"];
}
 /*if($count==1){
	 header('location:home_page.html');
 }
 else{
	 header('location:home.html');
 }*/
	?>
