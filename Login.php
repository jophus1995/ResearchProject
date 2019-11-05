<!DOCTYPE html>
<html>
<head>
    <title> Login to Account | PHP</title>
</head>

<body>
    <h1> Login </h1>
    
    <!--Login with Email and Password-->
    <div align="center"><form method="post" action="login.php">
        <div>
            <!--Email Label-->
            <label>Username: <input type="text" placeholder="Enter Email"name="email" required></label>
            <br></br>
        </div>
        <div>
            <!--Password Label-->
            <label>Password: <input type="password" placeholder="Enter Password" name="password" required></label>
            <br></br>
        </div>
        <input type="submit" value="Login">
        </form></div>

        <p> Not yet a member? <a href = "CreateAccount.php"> Sign Up </a>
</body>
</html>