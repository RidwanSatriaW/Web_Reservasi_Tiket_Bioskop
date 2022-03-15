<?php
    require("koneksi.php");

    $judul = $_GET['target'];
    $sql = "DELETE FROM film WHERE judul = '$judul'";

    if($connect -> query($sql) === TRUE){
        echo "<script>window.location = 'Dashboard.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>