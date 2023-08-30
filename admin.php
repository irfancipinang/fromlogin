<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Selanjutnya</title>
</head>
<body>
    <h2>Selamat Datang <?php echo $_SESSION['nama']?>, Anda berhasil Login</h2>
    <a href="logout.php"><button>Log Out</button></a>
</body>
</html>

<style>

    h2{
        display: flex;
        justify-content: center;
        height: 600px;
        align-items: center;
        font-family: "poppins";
    }
    a{
        display: flex;
        justify-content: center;
        margin-top: -275px;
    }
</style>