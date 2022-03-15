<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashAdmin.css">
    <script src="ShowAndHidden.js"></script>
    <title>Dashboard Admin</title>
</head>
<body>
    <?php
        require('koneksi.php');
        $jumlah_user = mysqli_query($connect, "SELECT nama from member");
        $jumlah_data_user = mysqli_num_rows($jumlah_user);
        $jumlah_film = mysqli_query($connect, "SELECT id_film from film");
        $jumlah_data_film = mysqli_num_rows($jumlah_film);
        $sql3 = mysqli_query($connect, "SELECT SUM(jml_tiket_pesan) FROM pemesan");
        while($data3 = mysqli_fetch_array($sql3)) {
            $total =  number_format($data3['SUM(jml_tiket_pesan)']);
        }
    ?>
    <div class="pilihan">
        <div class="data_admin">
            <img src="img/Movitria.png" alt="">
            <p class="admin">Admin</p>
        </div>
        <hr>
        <div class="menu">
                <input type="submit" onclick="showInputAdmin();" value="Input Admin">
                <input type="submit" onclick="showInputFilm();" value="Input Film">
                <input type="submit" onclick="showDataFilm();" value="Daftar Film">
                <input type="submit" onclick="showDataUser();" value="Daftar User">
                <input type="submit" onclick="showLogTransaksi()" value="Log Transaksi">
                <a href="logout.php"><input type="submit" value="Log out"></a>
        </div>
    </div>
    <div class="jumlah">
        <div class="user">
            <p class="Keterangan">User</p>
            <p class="nilai"><?php echo $jumlah_data_user;?></p>
        </div>
        <div class="tiket">
            <p class="Keterangan">Tiket Terjual</p>
            <p class="nilai"><?php echo $total?></p>
        </div>
        <div class="Film" style="display: block;">
            <p class="Keterangan">Jumlah Film</p>
            <p class="nilai"><?php echo $jumlah_data_film?></p>
        </div>
    </div>
    <div class="Tampilan">
        <div>
            <?php
                require('AdminLihatDataUser.php');
                require('AdminLihatDataFilm.php');
                require('AdminLogTransaksi.php');
            ?>
        </div>
        <?php
            require('AdminInputAdmin.php');
            require('AdminInputFilm.php');
            require('AdminInputJadwal.php');
        ?>

    </div>
</body>
</html>