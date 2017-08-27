<?php
//echo'delete some note';

// connecting to a webserver 


$website = "localhost";
$username = "root";
$password = "dream";
$database = "noteit";

$mysqli = mysqli_connect($website,$username,$password);
if(!$mysqli)
{
   echo"no";
}
else
{ 
   //echo"yes";
  // select data base 
  $result=mysqli_select_db($mysqli,$database);
  if(!$result)
  {
     echo "no";	  
  }
  else  
  {
     // echo "yes";
    // query to delete data from the database
     $theid=$_POST['thenameid'];	
     
     $mysql = "DELETE FROM thenote WHERE thenoteid = $theid";
     $result = mysqli_query($mysqli ,$mysql);
     if(!$result)
     {
	echo "no";
     }
     else
     {
       
     }
  }
}


?>
