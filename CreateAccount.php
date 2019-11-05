<!DOCTYPE html>
<html>
<head>
    <title> Create New Account | PHP</title>
</head>
<body>

<div>
    <form action="CreateAccount.php" method="post">
        <div class="container">
            <h1>Create New Account</h1>
            <p>Enter your information below. </p>
            
            <label for="firstname"><h>First Name</h></label>
            <input type="text" name="firstname" required>

            <label for="lastname"><h>Last Name</h></label>
            <input type="text" name="lastname" required>

            <label for="email"><h>Email</h></label>
            <input type="text" name="email" required>

            <label for="confirmationemail"><h>Confirmation Email</h></label>
            <input type="text" name="confirmationemail" required>

            <label for="password"><h>Password</h></label>
            <input type="password" name ="password" required>

            <label for="confirmationpassword"><h>Confirmation Password</h></label>
            <input type="password" name="confirmationpassword" required>

            label for="username"><h>Username</h></label>
            <input type="text" name="username" required>

            <label for="dateofbirth"><h>Date Of Birth</h></label>
            <input type="text" name="dateofbirth" required>

            <label for="expectedgraduation"><h>Expected Graduation</h></label>
            <input type="text" name="expectedgraduation" required>

            <input type="submit" name="create" value="Submit"

            </div>
        </form>
    </div>

</body>
</html>
