<?php
    require('koneksi.php');
    echo '<div id="plusJadwal" hidden>
    <center>
    <p>Tambah Jadwal Baru</p>
    <form  action="tambahJadwal.php" method="post">
    <input type ="date" name="mulai" placeholder="Tanggal Mulai" require><br><br>
    <input type ="date" name="selesai" placeholder="Tanggal Selesai" require><br><br>
    <input type ="number" name="id_ruang" placeholder="ID Ruang" require><br><br>
    <input type ="number" name="id_sesi" placeholder="ID Sesi" require><br><br>
    <input type ="submit" name="submit" id="submit" value="Tambah">
    </form>
    </center>
    </div>';
?>
</body>
</html>