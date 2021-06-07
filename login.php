<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <div class="boxes">
        <h2>LOGIN</h2>
        <form action="blog.php" method="post">
            <div class="login-box">
            <input name="username" id="username">
                <label for="username">Username</label>
            </div>
            <div class="login-box">
            <input type="password" name="password" id="password">
                <label for="password">Password</label>

            </div>
            <button class="button" type="submit" name="submit" value="Login" href="blog.php">Login</button>

        </form>
    </div>
</body>

</html>