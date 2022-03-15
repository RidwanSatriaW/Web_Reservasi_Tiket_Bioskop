<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:10% auto;
		position: relative;
		width: 300px;
		color: #fff;
		text-decoration: none;
		background-color: #FFBA00;
		border-radius: 3px;
		box-shadow: 0 5px 0px 0px #eea900;
		display: block;
	}
	a.popup-link:hover {
		background-color: #ff9900;
		box-shadow: 0 3px 0px 0px #eea900;
		-webkit-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/
	/* animasi popup */

	@-webkit-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@-moz-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	/* end animasi popup */
	/*style untuk popup */	
	#popup {
		background-color: rgba(0,0,0,0.8);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		-webkit-animation:autopopup 2s;
		-moz-animation:autopopup 2s;
		animation:autopopup 2s;
	}
	#popup:target {
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
		opacity: 0;
		visibility: hidden;
	}

	@media (min-width: 768px){
		.popup-container {
			width:600px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:100%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:30px 50px;
		background-color: #fafafa;
		color:#333;
		border-radius: 3px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #333;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#fff;
	}
	/* end style popup */

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			font-size: 37px;
			text-transform: uppercase;
		}
		.popup-form .input-group {
			margin:10px auto;
		}
			.popup-form .input-group input {
				padding:17px;
				text-align: center;
				margin-bottom: 10px;
				border-radius:3px;
				font-size: 16px; 
				display: block;
				width: 100%;
			}
			.popup-form .input-group input:focus {
				outline-color:#FB8833; 
			}
			.popup-form .input-group input[type="email"] {
				border:0px;
				position: relative;
			}
			.popup-form .input-group input[type="submit"] {
				background-color: #FB8833;
				color: #fff;
				border: 0;
				cursor: pointer;
			}
			.popup-form .input-group input[type="submit"]:focus {
				box-shadow: inset 0 3px 7px 3px #ea7722;
			}
	/* end style isi popup */

	</style>
</head>
<body>
    <?php
    
        $jmlTiket = $sesi = $tgl = "";
        $jmlTiket = $_POST["nama"];
        $sesi = $_POST["sesi"];
        $tgl = $_POST["tanggal"];
        $tot = $jmlTiket * 30000;
            
    ?>

<div class="popup-wrapper" id="popup">
	<div class="popup-container">

		<!-- Konten popup, silahkan ganti sesuai kebutughan -->
			<h3>Cek Kembali Pesanan Anda</h3>
           
				<table >
                    <tr>
                        <td>Jumlah Tiket yang Dipesan</td>
                        <td>: <?php echo $jmlTiket;?></td>
                    </tr>
                    <tr>
                        <td>Sesi yang Dipilih</td>
                        <td>: <?php echo $sesi;?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Tayang</td>
                        <td>: <?php echo $tgl;?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>: <?php echo $tot;?></td>
                    </tr>
                    
                </table><br>		
                <a href="Confirm.php?tiket=<?php echo $jmlTiket?>&sesi=<?php echo $sesi?>&tanggal=<?php echo $tgl?>&harga=<?php echo $tot?>" style="margin-left:85%"><button>Confirm</button></a>
		<a class="popup-close" href="javascript:history.back()">X</a>
	</div>
</div>
</body>
</html>