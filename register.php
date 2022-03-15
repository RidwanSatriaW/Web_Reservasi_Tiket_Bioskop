<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/gaya.css">
</head>
<body>
 
    
    <div class="boxLogin" style="">
        <center>
            <p style ="padding-top : 10px;">Register New Account</p>
            <form action="registerUser.php" method="post">
                <input type ="text" name="nama" placeholder="Name" required><br><br>
                <input type ="email" name="email" placeholder="Email" required><br><br>
                <input type ="password" name="passwd" placeholder="Password" required><br><br>
                <input type ="password" name="confitmation" placeholder="Confirm Password" required><br><br>
                <input type ="submit" name="submit" id="submit" value="Register">
            </form>
            <p style ="padding-bottom : 10px;">Have Account ? <a href="login.php">Login</a></p>
        </center>
    </div>
    

</body>
</html>