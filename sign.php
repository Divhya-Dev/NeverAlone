<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!con)
{
    echo'Not connected to server';
}
if(mysqli_select_db($con,details))
{
    echo'Dtabase not selected';
}
$Name=$_POST{'username'}
?>
$First Name=$_POST('Firstname');
$Last Name=$_POST('Lastname');
$Email ID=$_POST('Email_id');

$sql="INSERT INTO person (First Name,Last Name,Email ID) VALUES('$First Name','$Last Name','$Email ID')";
if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}
header("refresh:2;url=signup.html");