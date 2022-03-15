<?php
    require("koneksi.php");

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];
    
    $confirmPasswd = $_POST["confitmation"];

    if($passwd === $confirmPasswd){
        $sql = "INSERT INTO member(nama, email, sandi)
        VALUES ('$nama', '$email', '$passwd')";
    
        if ($connect -> query($sql) === TRUE){
            echo "<script>alert('Anda Telah Terdaftar Sebagai User');
            window.location = 'login.php'</script>";
        }else{
            echo "<script>alert('Terjadi Kendala Pada".$sql."<br>".$connect->error."');
            window.location = 'register.php'</script>";

        }
        $connect->close();
    }else{
        echo "<script>alert('Password tidak sama');
        window.location = 'register.php';</script>";
    }
?>