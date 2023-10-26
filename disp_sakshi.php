<html>

<head>
    <title>DISPLAY</title>
    <style>
        body {

            background: white;
        }

        table {
            background-color: white;

        }
    </style>
</head>


<?php

include("elect.php");

error_reporting(0);

$query = "SELECT * FROM electric";

$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);




if ($total != 0) {
    ?>
    
    <h2 align="center"> <mark>DISPLYING ALL RECORDS</mark></h2>

    <center>
        <table border="1" cellspacing="7" width="70%">
            <tr>
                <!-- <th width="10%">ID</th> -->
                <th width="10%">NAME</th>
                <th width="10%">EMAIL</th>
                <th width="10%">SUBJECT</th>
                <th width="10%">MSG</th>
                <th width="10%">MOBILE NO</th>
            </tr>







            <?php

            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
        <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
       <td>" . $result['subject'] . "</td>
       <td>" . $result['msg'] . "</td>
       <td>" . $result['number'] . "</td>
       </tr>
       ";

            }
} else {
    echo "record not found";
}