<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/gaya.css">
    <title>Document</title>
    <script>
        document.getElementById("logout").setAttribute("hidden", true)
    </script>
</head>
<body >
    <div >
        <?php
            require('sirah2.php');
        ?>
    </div>
    
    <div>
        <?php
            require('slider2.php');
        ?>
    </div>

    <div class="content">
        <h1>Recomended</h1><br>
        <table >
            <tr>
                <td style="padding-right:100px; "><img src="img/database/nowayhome.jpg"  class="image"></td>
                <td><p >Identitas Spider-Man sekarang sudah terungkap, dan Peter meminta bantuan Doctor Strange. namun sebuah kesalahan terjadi, dan itu justru mengundang musuh berbahaya dari dunia lain, mereka mulai bermunculan. Hal itu memaksa Peter mencari apa makna sebenarnya menjadi Spider-Man.</p></td>
            </tr>
            <tr>
                <td><img src="img/database/comic8.jpg"  class="image"></td>
                <td><p>Delapan agen rahasia di bawah pimpinan Indro Warkop kembali beraksi. Kini mereka menyamar sebagai komika untuk mencari seorang komika yang menjadi penghubung ke master kriminal. Master kriminal tersebut memiliki sebutan sebagai The King. Dia merupakan pemilik kasino atau tempat perjudian paling spektakuler di Asia. Dalam perjalanan mencari kasino serta menangkap The King, kedelapan komika tersebut harus melewati banyak proses dan hambatan. Mereka harus menghadapi pasukan pembunuh, preman, sampai penjahat cap kampak. Belum lagi mereka juga harus menghindari serta melawan interpol dan kepolisian akibat misi mereka sebelumnya yang merampok bank.</p></td>            </tr>
        </table>
    </div>

    <div>
        <?php
            require('sikil.php');
        ?>
    </div>


</body>
</html>