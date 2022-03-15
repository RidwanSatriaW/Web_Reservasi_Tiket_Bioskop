<?php

    require('koneksi.php');

    $genre = $_POST ['genre'];
    $rating = $_POST ['rating'];
    $durasi = $_POST ['durasi'];
    $jadwal = $_POST ['jadwal'];
    $rilis = $_POST ['rilis'];
    $gambar = $_POST ['gambar'];
    $sinopsis = $_POST ['sinopsis'];
    $target = $_POST ['target'];
    $sql = "UPDATE film SET judul = '$target', genre= '$genre', 
            rating= '$rating', durasi = '$durasi', id_jadwal='$jadwal',
            rilis='$rilis', gambar = '$gambar', sinopsis = '$sinopsis' WHERE judul = '$target'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location = 'Dashboard.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>