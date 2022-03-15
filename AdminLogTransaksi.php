<?php
    require("koneksi.php");

    $sql = "SELECT * FROM pemesan";
    $result = mysqli_query($connect, $sql);
    if($result->num_rows > 0){
        echo "<table id='transaksi' hidden><tr><th>ID Member</th><th>Tanggal Pemesanan</th><th>Jumlah Tiket</th><th>Total Harga</th></tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
            <td>" . $row["id_member"]. " </td>
            <td>" . $row["jml_tiket_pesan"]. " </td>
            <td>" . $row["total_harga"]. " </td>
            <td>" . $row["tgl_pesan"]. " </td>
            </tr>";
        };
        echo "</table>";
    };
?>