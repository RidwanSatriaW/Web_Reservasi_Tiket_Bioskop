<?php
    require("koneksi.php");

    $nama = $_POST["nama"];
    $passwd = $_POST["passwd"];
    $confirmPasswd = $_POST["confitmation"];
    $email = $_POST["email"];
    $level = $_POST["level"];

    if($passwd === $confirmPasswd){
        $sql = "INSERT INTO administrator(nama,email,sandi,level)
        VALUES ('$nama', '$email', '$passwd', '$level')";

        if ($connect -> query($sql) === TRUE){
            echo "<script>alert('Anda Telah Terdaftar Sebagai User');
            window.location = 'Dashboard.php'</script>";
        }else{
            echo "<script>alert('Terjadi Kendala Pada".$sql."<br>".$connect->error."');
            window.location = 'Dashboard.php'</script>";
        }
        $connect->close();
    }else{
        echo "<script>alert('Password tidak sama');
        window.location = 'Dashboard.php';</script>";
    }
?>