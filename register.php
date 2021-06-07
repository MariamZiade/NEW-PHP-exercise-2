<?php

$conn = null;
$servername = 'localhost';
$dbname = "users";
$username = 'root';
$password = '';
$sql = '';
$err_msg = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (
    isset($_POST['username']) && $_POST['username'] != ""
    && isset($_POST['email']) && $_POST['email'] != ""
    && isset($_POST['password']) && $_POST['password'] != ""
) {
    try {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (username,email,password)
                VALUES ('$username','$email','$password')";
        $conn->exec($sql);
        header('Location: blog.php');
    } catch (PDOException $e) {
        $err_msg = "Please Try Again";
        echo $sql . "<br>" . $e->getMessage();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="boxes">
        <h2> REGISTER </h2>

        <form method="post">
            <div class="register-box">
                <input name="username" id="username">
                <label for="username">Username</label>
            </div>
            <div class="register-box">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="register-box">
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>

            <button class="button" type="submit" name="submit" value="Register">Register</button>

            <?php
            // $err_msg = false;

            if ($err_msg) {
                echo "<p style='color:red;'>$err_msg</p>";
            }
            ?>

        </form>

    </div>

</body>

</html>