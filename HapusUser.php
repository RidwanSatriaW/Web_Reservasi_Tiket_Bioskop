<?php
    require("koneksi.php");

    $email = $_GET['target'];
    $sql = "DELETE FROM member WHERE email = '$email'";

    if($connect -> query($sql) === TRUE){
        echo "<script>window.location = 'Dashboard.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>