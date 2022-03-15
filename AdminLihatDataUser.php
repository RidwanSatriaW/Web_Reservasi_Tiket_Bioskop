<?php
    require("koneksi.php");

    $sql = "SELECT * FROM member";
    $result = mysqli_query($connect, $sql);
    if($result->num_rows > 0){
        echo "<table id='user'><tr><th>Username</th><th>Email</th><th>Aksi</th></tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
            <td>" . $row["nama"]. " </td>
            <td>" . $row["email"]. " </td>
            <td>
            <a href='HapusUser.php?target=".$row["email"]."'><button class='btnHapus'> Hapus</button></a>
            </td>
            </tr>";
        };
        echo "</table>";
    };
?>