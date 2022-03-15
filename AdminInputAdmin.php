<?php
    require('koneksi.php');
    echo '<div id="plusAdmin" hidden>
    <center>
    <p>Masukkan Data Admin Baru</p>
    <form  action="registerAdmin.php" method="post">
    <input type ="text" name="nama" placeholder="Name" require><br><br>
    <input type ="email" name="email" placeholder="Email" require><br><br>
    <input type ="text" name="level" placeholder="Level" require><br><br>
    <input type ="password" name="passwd" placeholder="Password" require><br><br>
    <input type ="password" name="confitmation" placeholder="Confirm Password" require><br><br>
    <input type ="submit" name="submit" id="submit" value="Register">
    </form>
    </center>
    </div>';
?>
</body>
</html>