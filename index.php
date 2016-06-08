<?php
    // Lampirkan db dan User
    require_once "db.php";
    require_once "User.php";

    // Buat object user
    $user = new User($db);

    // Jika belum login
    if(!$user->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }

    // Ambil data user saat ini
    $currentUser = $user->getUser();

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <div class="container">
            <div class="info">
                <h1>Selamat datang <?php echo $currentUser['nama'] ?></h1>
            </div>
            <a href="logout.php"><button type="button">Logout</button></a>

        </div>
    </body>
</html>
