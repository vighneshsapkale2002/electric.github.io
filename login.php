<?php

session_start();

include("db.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
    if ($gmail == 'admin@gmail.com' && $password == 'admin') {
        header("location: disp_sakshi.php");
    } else {
        // header("location:table.php");


        if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
            $query = "SELECT * FROM form WHERE email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['pass'] == $password) {
                        header("location: table.php");
                        die;
                    }
                }
                header("location: table.php");

            }
            echo "<script type='text/javascript'> alert('wrong Username or Password')</script>";
        }
        // echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
        else {
            echo "<script type='text/javascript'> alert('Wrong Username or password')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form method="POST">

            <label>Email</label>
            <input type="text" name="mail" required>

            <label>Password</label>
            <input type="password" name="pass" required>

            <input type="submit" name="" value="Submit">

        </form>
        <p>Not Have an Account? <a href="signup.php">Sign Up Here</a></p>


</body>

</html>