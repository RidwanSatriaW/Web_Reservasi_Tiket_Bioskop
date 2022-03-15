
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="style/sirah.css">
        <link rel="stylesheet" href="../style/sirah.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <div style = "background-color : #161620">
            <div >
                <img src="" alt="" height="">
            </div>
            <div class="Nav">
                <ul>
                    <li><img src="img/LogoMovitria.png" alt="" width = "200px" height="auto" style="margin:-10px;object-position: 0 -5px;"></li>
                    
                    <li>
                    <form>
                     
                        <select class = "pilihGenre" onChange="document.location.href=this.options[this.selectedIndex].value;">
                            <option value="0" hidden>Genre</option>
                            <option value="genreAksi.php">Aksi</option>
                            <option value="genreRomance.php">Romance</option>
                            <option value="genreHoror.php">Horor</option>
                            <option value="genreAnimasi.php">Animasi</option>
                            <option value="genreComedy.php">Comedy</option>
                        </select>
                    </form>
                    </li>
                    <li><a href="movie.php">Movie</a></li>
                    <li class="login" id="logout"><a href="logout.php"><input type="submit" value="Logout"></a></li>
                </ul>
                <div style = "clear : both"></div>
            </div>
        </div">


    </body>
    </html>

