<?php 
// the detail
$website = "localhost";
$username = "root";
$password = "dream";

// connect to mysql using mysqli
$mysqli = mysqli_connect($website,$username,$password);

//check if the connection sucessfull or not
if(!$mysqli)
{
//the connection not sucess
echo "no";
}
else
{
// the connection sucess 
echo "yes";

//query to create the database
$mysql = "CREATE DATABASE IF NOT EXISTS noteit; ";

//query the database 
$result = mysqli_query($mysqli,$mysql);
echo $result;

// query to use database
// can not be use to select database

/* $mysql = "USE NOTEIT;";
 * $result = mysqli_query($mysqli,$mysql);
 * echo 'the';
 */

// query to select db to use php
$database = "noteit";
$result = mysqli_select_db($mysqli,$database);
echo $result;

// code to select databases
//$database = "noteit";
//mysqli_select_db($mysqli,$database);

//query to create the table
$mysql = "CREATE TABLE IF NOT EXISTS thenote(thenoteid INT(11) NOT NULL AUTO_INCREMENT,
          note TEXT ,PRIMARY KEY(thenoteid));";

// query the database 
$result = mysqli_query($mysqli,$mysql);
echo $result;

} 

?>