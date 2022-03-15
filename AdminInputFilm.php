<html> 
<body>
    <?php
    require('koneksi.php');
    ?>
    <div id="plusFilm" hidden>
    <center>
    <p>Masukkan Data Film Baru</p>
    <form  action="tambahFilm.php" method="post" enctype="multipart/form-data">
    <input type ="text" name="judul" placeholder="Judul" ><br><br>
    <input type ="text" name="genre" placeholder="Genre" ><br><br>
    <input type ="time" name="durasi" placeholder="Durasi" ><br><br>
    <input type ="file" name="file" ><br><br>
    <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" placeholder="Sinopsis"></textarea><br><br>
    <input type ="submit" name="upload" id="submit" value="Tambah">
    </form>
    </center>
    </div>
    <html> 
</body>
</html>