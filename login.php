<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/gaya.css">
</head>
<body>
    <?php

    require('koneksi.php');
        session_start();

        if (isset($_SESSION['nama'])) {
            header("Location: movie.php");
        }

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['passwd'];

            //login admin
            $admin = "SELECT * FROM administrator WHERE email='$email' AND sandi='$password'";
            $resultAdmin = mysqli_query($connect, $admin);
            if ($resultAdmin->num_rows > 0) {
                $row = mysqli_fetch_assoc($resultAdmin);
                $_SESSION['nama'] = $row['sandi'];
                header("Location: Dashboard.php");
            } 

            //login user
            $member = "SELECT * FROM member WHERE email='$email' AND sandi='$password'";
            $resultMember = mysqli_query($connect, $member);
            if ($resultMember->num_rows > 0) {
                $row = mysqli_fetch_assoc($resultMember);
                $_SESSION['nama'] = $row['nama'];
                header("Location: movie.php");
            } else {
                echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
            }
        }
    ?>

    <div class="boxLogin">
        <center>
            <p style = "padding-top: 10px;">Login</p>
            <form action="" method="post">
                <input type="email" name="email" placeholder="Email"><br><br>
                <input type="password" name="passwd" placeholder="Password"><br><br>
                <input type="submit" name="submit" value="Login">
            </form>
            <p style ="padding-bottom : 10px;">New User ? <a href="register.php">Register</a></p>
        </center>
    </div>


</body>
</html>