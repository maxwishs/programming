<?php 
//echo "<p>connected</p>";

// connecting to the database

$website = 'localhost';
$username = 'root';
$password = 'dream';
$database = 'noteit';

$mysqli = mysqli_connect($website,$username,$password);
//checking if the coonection is succed
if(!$mysqli)
 {
   echo  "no";
 }
else
{
  echo "yes";
  // select  the database
  $result = mysqli_select_db($mysqli,$database);
  // check if database selected
  if(!$result)
  {
    echo 'no';
  }
  else
  {
    echo 'yes';
    // query to reset the the database
    $mysql = "TRUNCATE TABLE thenote;";
    $result = mysqli_query($mysqli,$mysql);
    if(!$result)
    {
       echo 'no';
    }
    else
    {
      echo 'yes';
    }
  }
 }
?>
