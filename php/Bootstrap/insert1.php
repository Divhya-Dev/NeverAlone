<?php
$Firstname = "localhost";
$Lastname = "root";
$Email_id = "";
$dbName = "Website";
$cont=mysqli_connect($Firstname ,$Lastname,$Email_id,$dbName) or
die("Connection Failed :" .mysqli_connect_error());
echo "Connected to MySQL successfully \n";
$sql =mysqli_query($cont, "INSERT INTO website (Firstname,Lastname,Email)
VALUES ('$Firstname','$Lastname','$Email_id')");
#$run = mysqli_query($cont,$sql);

if ($sql == True){
 echo "inserted";
}
else{
  echo "not inserted";
}


#if(mysqli_connect_error($cont)){
#  echo "Failed to connect";
#}
?>
