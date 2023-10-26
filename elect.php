<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "electric";



 $con =  mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
}
else
{
    echo "connection failed";
}





?>







<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "register";



// $con = mysqli_connect($servername, $username, $password, $dbname);

// if (!$con) {
//     echo "connection failed";
// }

?>