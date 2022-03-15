<?php
    require("koneksi.php");

    $sql = "SELECT * FROM film";
    $result = mysqli_query($connect, $sql);
    if($result->num_rows > 0){
        echo "<table id='film' hidden><tr><th>Judul</th><th>Genre</th><th>Sinopsi</th><th>Aksi</th></tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
            <td>" . $row["judul"]. " </td>
            <td>" . $row["genre"]. " </td>
            <td>" . $row["sinopsis"]. " </td>
            <td>
            <a href='HapusFilm.php?target=".$row["judul"]."'><button class='btnHapus'> Hapus</button></a>
            </td>
            </tr>";
        };
        echo "</table>";
    };
?>