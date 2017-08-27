<?php 
//echo 'login';
//get the posted username and password
$postusername = $_POST['username'];
$postpassword = $_POST['password'];


//echo $username;
/*
 * coonect to logindb and check if the given username and password is correct 
 */

$website="localhost";
$username="root";
$password="dream";
$database="noteit";

$mysqli = mysqli_connect($website,$username,$password);
//check if the connection sucess
if(!$mysqli)
{
 //echo 'no';
}
else
{
 //echo 'yes';
 //choose a database
 $result = mysqli_select_db($mysqli,$database);
 //check if database is slected
 if(!$result)
 {
  //echo "no";
 }
 else
 {
  //echo "yes";
  //query
  $mysql = "SELECT username,password FROM noteitlogdb WHERE username LIKE BINARY '$postusername' AND password LIKE BINARY '$postpassword' ";
  //query the table 
  $result=mysqli_query($mysqli,$mysql);
  //get the row number
  $numberofrow = mysqli_num_rows($result);
  //echo $numberofrow;
  //check the number or rows
  if($numberofrow != 1)
  {
     echo 0;
  }
  else
  {
    echo 1;
   
  }
 }
 
}


?>
