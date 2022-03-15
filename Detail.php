<!DOCTYPE html>
<html>
<head>
   <title> MOVITRIA</title>
   <link rel="stylesheet" href="style/detail.css">
   
   <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:7% auto;
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
		-moz-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/

	/*style untuk popup */	
	#popup {
		visibility: hidden;
		opacity: 0;
		margin-top: -200px;
	}
	#popup:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(255,255,255,0.8);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99999999999;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
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
		background-color: #333;
		color:#fff;
		border-radius: 3px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #fff;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#333;
	}

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
	/* end isi form */
	</style>
   
</head>
<body>

    <div>
        <?php
        require("sirah.php");
        ?>
    </div>
    <?php   

        require('koneksi.php');
        $target = $_GET['target'];

        $sql = "SELECT * FROM film where tipe_image = '$target'";
        $result = mysqli_query($connect, $sql);
        $data = mysqli_fetch_array($result);
    
    ?>
    <h1>PEMESANAN TIKET</h1>
    <img src='<?php echo "img/database/".$data['tipe_image']?>' align ="left">
    <table style="padding-left: 50px;width : 700px;">
    <tr> 
        <td>Nama Film</td>
        <td>: <?php echo $data['judul'] ?></td>
    </tr>
    <tr> 
        <td>Jam Tayang</td>
        <td>: 10.00 - 12.00 <br>&nbsp;&nbsp;13.00 - 15.00 <br>&nbsp;&nbsp;16.00 - 18.00</td>
    </tr>
    <tr> 
        <td> Harga Tiket</td>
        <td> : Rp.30.000</td>
    </tr>
    <tr> 
        <td> Genre</td>
        <td> : <?php echo $data['genre']?></td>
    </tr>
    <tr> 
        <td style="padding-top: 10px"> Sinopsis</td>
        <td ></td>
    </tr>
    <tr >
        <td style="border-bottom:1px solid gold" colspan="2"><p>&emsp;&emsp;<?php echo $data['sinopsis']?></p></td>
    </tr>
    <form action="PopUp.php" method="post" id="form">
    <tr >
                        <td >Masukkan Jumlah Tiket</td>
                        <td style="padding-top:15px"><input id="jmlTiket" type ="number" name="nama" max="10" min="1" placeholder="max 10 tiket" style="width:150px"required></td>
                    </tr>
                    <tr>
                        <td>Pilih Jam Tayang</td>
                        <td><select id="sesi" name="sesi" style="width : 272px; height : 30px; padding-left : 10px;"required>
                            <option hidden>Jam Tayang</option>
                            <option value="10.00 - 12.00">10.00 - 12.00</option>
                            <option value="13.00 - 15.00">13.00 - 15.00</option>
                            <option value="16.00 - 18.00">16.00 - 18.00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pilih Tanggal</td>
                        <td><input id="tgl" name="tanggal" style="width:150px" type="date" max="2022-03-10" min="2022-03-01" required></td>
                    </tr>
                    <tr>
                        <td style="padding-top:15px"><input type ="submit" name="submit" id="submit" value="Order Ticket"></td>
                    </tr>
    </table>

        
            </form>
    

</div>

    
    
</body>

</html>

