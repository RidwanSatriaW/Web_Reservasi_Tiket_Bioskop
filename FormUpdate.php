<?php

    require('koneksi.php');
    
    $judul = $_GET['target'];
    $sql = "SELECT * FROM film where judul = '$judul'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

    echo '<div id="FormFilm" hidden>
    <center>
    <p>Update Data Film</p>
    <form action="UpdateFilm.php" method="post">
    <input type ="text" name="judul" placeholder="Judul" value="'.$row['judul'].'"require><br><br>
    <input type ="text" name="genre" placeholder="Genre" value="'.$row['genre'].'" require><br><br>
    <input type ="number" name="rating" placeholder="Rating" value="'.$row['rating'].'" require><br><br>
    <input type ="time" name="durasi" placeholder="Durasi" value="'.$row['durasi'].'"require><br><br>
    <input type ="number" name="jadwal" placeholder="Jadwal" value="'.$row['id_jadwal'].'" require><br><br>
    <input type ="number" name="rilis" placeholder="Rilis" value="'.$row['rilis'].'" require><br><br>
    <input type ="file" name="gambar" placeholder="Gambar" value="'.$row['gambar'].'"require><br><br>
    <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" placeholder="Sinopsis">'.$row['sinopsis'].'</textarea><br><br>
    <input type ="submit" name="submit" id="submit" value="Update">
    </form>
    </center>
    </div>';
?>