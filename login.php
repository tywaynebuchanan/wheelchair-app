<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Wheelchair Management System-Login Page</title>
</head>
<body>

<div class="center">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="txt_field">
            <input type="text">
            <span></span>
            <label>Username </label>
        </div>
        <div class="txt_field">
            <input type="password">
            <span></span>
            <label>Password</label>
        </div>
        <div class="forget">
            Forget Password?
        </div>
        <input type="submit" name="submit" value = "Login" id="">
        <div class="signup">
            Not a member? <a href="index.php">Sign Up!</a>
        </div>
    </form>
    <p>Wheelchair Management System</p>
</div>


<script src="main.js"></script>
</body>
</html>