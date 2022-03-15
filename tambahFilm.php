<?php
    require('koneksi.php');
    // $sql = "INSERT INTO film(judul, genre, rating, durasi, id_jadwal, rilis, gambar, sinopsis)
    // VALUES ('$judul','$genre','$rating','$durasi','$jadwal','$rilis','$gambar','$sinopsis')";

    // if ($connect->query($sql) === TRUE) {  
    // echo "Data berhasil ditambahkan.";
    // } else {
    // echo "Error: " . $sql . "<br>" . $connect->error;
    // }
    // $connect->close();

	//pengujian jika tombol upload diklik
	if(isset($_POST['upload']))
	{
        $judul = $_POST ['judul'];
        $genre = $_POST ['genre'];
        $durasi = $_POST ['durasi'];
     
        $sinopsis = $_POST ['sinopsis'];
		//ekstensi file yang boleh di upload
		$ekstensi_diperbolehkan = array('png', 'jpg', 'pdf', 'rar');
		$nama = $_FILES['file']['name']; // untuk mendapatkan nama file yang diupload
		//nama_file.jpg
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran = $_FILES['file']['size']; //untuk mendapatkan ukuran file yang akan di upload
		$file_tmp = $_FILES['file']['tmp_name']; //untuk mendapatkan temporary file yang akan di upload (tmp)

		//uji jika ekstensi file yang diupload sesuai
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			//boleh upload file
			//uji jika ukuran file dibawah 1mb
			if($ukuran < 1044070){
				//jika ukuran sesuai
				//PINDAHKAN FILE YANG DI UPLOAD KE FOLDER FILE aplikasi
				move_uploaded_file($file_tmp, 'img/database/'.$nama);

				//simpan data ke dalam database
				$simpan = mysqli_query($connect, "INSERT INTO 
												  film (id_film,judul,genre,durasi,sinopsis, tipe_image)
												  VALUES ('','$judul','$genre','$durasi','$sinopsis','$nama')");
				if($simpan){
					echo "<script>alert('FILE BERHASIL DI UPLOAD'); document.location='Dashboard.php'</script>";
				}else{
					echo "<script>alert('GAGAL MENGUPLOAD FILE'); document.location='Dashboard.php'</script>";
				}

			}else{
				//ukuran tidak sesuai
				echo "<script>alert('UKURAN FILE TERLALU BESAR, MAX. 1MB'); document.location='Dashboard.php'</script>";
			}
		}else{
			//ektensi file yang di upload tidak sesuai
			echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN');</script>";
		}
	}
?>