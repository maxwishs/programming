<?php
//echo 'wellcome';

//connect to database 

$website = 'localhost';
$username = 'root';
$password = 'dream';
$database = 'noteit';

$mysqli = mysqli_connect($website,$username,$password);
// check the connect if sucess 
if(!$mysqli)
{
 echo  'no';
}
else
{
  //echo 'yes';
  //choose a database
  $result = mysqli_select_db($mysqli,$database);
  // check if the database is selected
  if(!$result)
  {
    // echo "the data base is not selected";
  }
  else
  {
     // echo 'the data base is selected ';
	  // query to select all data from the database
      $arraynote = [];     
      $mysql = "SELECT * FROM thenote;";
      $result =  mysqli_query($mysqli , $mysql);
      while($row = mysqli_fetch_assoc($result))
      {
	 // format the note to a good html element

	      $thenoteid=$row['thenoteid'];
	      $note=$row['note'];
	      $htmlnote = "<div id='thenote' name='$thenoteid'>$note</div>"; 
			 
	      echo $htmlnote; 
	

	     
      }
      	      
  }	  
}
 
?>
