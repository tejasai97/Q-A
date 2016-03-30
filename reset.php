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
mysql_query("UPDATE movies SET votes =0 WHERE name = 'srimanthudu'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'temper'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'bahubali'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 's/o satyamurthy'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'mahesh babu'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'Jr.NTR'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'prabhas'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'allu arjun'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'shruthi hassan'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'kajal agarwal'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'tamanna'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'samantha'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'koratala shiva'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'puri jagannath'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'S.S.rajamouli'");
mysql_query("UPDATE movies SET votes =0 WHERE name = 'trivikram srinivas'");
echo "values have been reset";
mysql_query("UPDATE football SET votes =0 WHERE name = 'Chelsea'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'Arsenal'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'Man utd'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'Southhamton'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'France'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'Spain'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'argentina'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'brazil'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'ribbery'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'neymer'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'messi'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'cristiano ronaldo'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'david luis'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'ramos'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'silva'");
mysql_query("UPDATE football SET votes =0 WHERE name = 'marcello'");
echo "values have been reset";
mysql_query("UPDATE cricket SET votes =0 WHERE catogory = 'team'");
mysql_query("UPDATE cricket SET votes =0 WHERE catogory = 'batsman'");
mysql_query("UPDATE cricket SET votes =0 WHERE catogory = 'bowler'");
mysql_query("UPDATE cricket SET votes =0 WHERE catogory = 'allrounder'");

echo "values have been reset";
	?>