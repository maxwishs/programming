<?php 
//echo 'edit';
//conecting to web server
$website = "localhost";
$username = "root";
$password = 'dream';
$database = 'noteit';

$mysqli = mysqli_connect($website,$username,$password);
if(!$mysqli)
{
 echo 'no';
}
else
{
 echo 'yes';
 $result = mysqli_select_db($mysqli,$database);
 if(!$result)
 {
  echo 'no';
 }
 else
 {
  echo 'yes';
  $id = $_POST['noteid'];
  $note = $_POST['thenote'];
  $mysql ="UPDATE thenote
          SET
           note = '$note'
         WHERE
           thenoteid = '$id';
        ";
  $result = mysqli_query($mysqli,$mysql); 
 }
}
?>
