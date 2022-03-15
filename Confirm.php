<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tiket</title>
    <link rel="stylesheet" href="style/gaya.css">
</head>
<body>
<div >
        <?php
            require('sirah.php');
        ?>
    </div>
    <div>
    <?php
    require("koneksi.php");
    $tiket = $_GET['tiket'];
    $sesi = $_GET['sesi'];
    $harga = $_GET['harga'];
    $tanggal = $_GET['tanggal'];
    $hariini = date('Y-m-d');
    $id_pemesan = 'PMSN'.date('his');
    session_start();
    $userAktif = $_SESSION['nama'];
    $add = mysqli_query($connect,"INSERT INTO pemesan(id_pemesan,sesi,tanggal,total_harga, tgl_pesan, jml_tiket_pesan) 
                                VALUES ('$id_pemesan','$sesi','$tanggal','$harga', '$hariini', '$tiket')");
    
    ?>
</div>
<div class="popup-wrapper" id="popup">
	<div style="width:800px; margin:auto; background-color:#161620; padding-top:10px; margin-top:150px;">

		<!-- Konten popup, silahkan ganti sesuai kebutughan -->
			<h3> <center>Silahkan Screenshot Pesanan</center></h3>
            <center><img src="img/LogoMovitria.png" width=200px padding-top=5px></center>
           <center>
				<table >
                    <tr>
                        <td>Pemesan</td>
                        <td>: <?php echo $userAktif;?></td>
                    </tr>
                    <tr>
                        <td>Sesi</td>
                        <td>: <?php echo $sesi;?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Tayang</td>
                        <td>: <?php echo $tanggal;?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>: <?php echo $harga;?></td>
                    </tr>
                    
                </table><br>		
</center>
                
</body>
</html>