<?php

// connect to server 

$newnote = $_POST['notebox'];
echo $newnote;


$website = "localhost";
$username = "root";
$password = "dream";
$database = "noteit";

$mysqli = mysqli_connect($website,$username,$password);
if(!$mysqli)
{
    echo "no";
}
else
{
    echo "yes";
    // select a database 
    $result = mysqli_select_db($mysqli,$database);
    //see if the database can be connect 
    if (!$result)
    {
         echo  'can not connect to the database';

    }
    else
    {
	 echo 'can conect to the database';
	 // query to the database to insert the new note to the database
	 $mysql = "INSERT INTO thenote(note) 
		   VALUES('$newnote');";
	 $result = mysqli_query($mysqli,$mysql);
	 echo $result;
    }
}

?>
