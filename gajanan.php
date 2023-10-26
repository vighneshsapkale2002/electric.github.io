<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "electric";



 $con =  mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "connection ok";
}
else
{
    echo "connection failed";
}





?>