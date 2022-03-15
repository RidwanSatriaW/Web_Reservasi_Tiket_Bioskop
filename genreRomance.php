<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/gaya.css">
</head>
<body>
    <div >
        <?php
            require('sirah.php');
        ?>
    </div>

<div style = "margin:auto; width:91%" >
	<h1>Romance</h1>

	
		<?php
			//panggil connect database
			include "koneksi.php";
            
			$tampil = mysqli_query($connect, "SELECT judul, genre, tipe_image from film where genre LIKE '%Romance%' ");
			while($data = mysqli_fetch_array($tampil)):

		?>
		<a href="Detail.php?target=<?php echo $data['tipe_image']?>"><img class="image" src="<?php echo "img/database/".$data['tipe_image'] ?>" width="300px" height="450px"></a>
		
	<?php endwhile;?>
	

</div>
<div>
        <?php
            require('sikil.php');
        ?>
    </div>
</body>
</html>