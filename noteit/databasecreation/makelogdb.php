<?php
//echo "can";

/*
 * creating new table to store user name and password 
 */

$website ="localhost";
$username ="root";
$password ="dream";
$database ="noteit";


// connect to mysql
$mysqli = mysqli_connect($website,$username,$password);
// checking if connection sucessfull
if(!$mysqli)
{
 echo "no";
}
else
{
 echo "yes";
 //selecting database to work with
 $result = mysqli_select_db($mysqli,$database);
 //checking if the db select work
 if(!$result)
 {
  echo "no";
 }
 else
 {
  echo "yes";
  //query
  $mysql = "CREATE TABLE IF NOT EXISTS 	noteitlogdb( 
	    id INT(11) NOT NULL AUTO_INCREMENT,
            username VARCHAR(11) NOT NULL ,
	    password VARCHAR(11) NOT NULL,
            type VARCHAR(11) NOT NULL,
            PRIMARY KEY(id)
	    );";

  //query the mysql
  $result = mysqli_query($mysqli,$mysql);
  //check if query sucessfull
  if(!$result)
  {
   echo "no";
  }
  else
  {
   echo "yes";
  }

 }

 
}

?>
