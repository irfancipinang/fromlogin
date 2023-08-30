<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($ambil) === 1) {
        $data = mysqli_fetch_assoc($ambil);

        if (password_verify($password,$data['password'])) {
            $_SESSION['nama'] = $data['nama'];
            header("location:admin.php");
            exit();
        }else{
            echo"<script>
            alert('Username atau password salah');
            window.location = 'Login.php';
            </script>";
        }
    
    
    }else{
        echo"<script>
        alert('Username atau password salah');
        window.location = 'Login.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Montserrat:wght@500&family=Pacifico&family=Righteous&family=Roboto+Slab:wght@300&family=Shantell+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="judul">
            <div class="loweb">
                <div class="subjudul"></div>    
                <div class="subjudul2"></div>    
            </div>
        </div>

        <div class="kotak1">
            <div class="kotak">
                <div class="menu">
                    <div class="sigin"><a href="">Login</a></div>
                    <div class="sigup"><a href="Register.php">Register</a></div>
                </div>
                <div class="isi">
                    <form action="" method="POST">
                        <div class="name"><input type="text" name="user" placeholder="Ussername"> </div>
                        <div class="password"><input type="password" name="pass" placeholder="Password"></div>
                        <div class="submit"><button type="submit" name="login" value="SUBMIT"><p>Login</p></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    *{
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
}

body{
    background-image: url(img/bg3.jpg);
    background-size: cover;
    background-position: 0, 0, 0, 50px;
}

.subjudul, .subjudul2{
    font-size: 40px;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

.judul{
    display: flex;
    height: 65px;
    /* background-color: aqua; */
    align-items: center;
}

.logo img{
    width: 50px;
}

.subjudul, .subjudul2{
    font-size: large;
    font-family: "arial";
}

.subjudul2{
    margin-left: 10px;
}

.kotak1{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 500px;
}

.kotak{
    width: 320px;
    height: 400px;
    border: 1px solid;
    border-radius: 25px;
    background-image: url(img/bg.jpeg);
    background-size: cover;
    background-position: 0, 10px;
    /* display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
     */
}

.menu{
    display:flex;
    gap: 40px;
    width: 320px;
    justify-content: center;
    margin-top: 30px;
}

.sigin a{
    font-weight: bold;
    font-size: 20px;
}

.sigup a{
    font-weight: bold;
    font-size: 20px;
}

.sigup{
    opacity: 60%;
}

.sigin a, .sigup a{
    text-decoration: none;
    color:  #FF7686;
    font-family: "Montserrat";
    border-bottom: 3px solid #FF7686;
    
}

.isi{
    width: 320px;
    height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.name, .password{
    margin-top: 20px;
}

.tombol{
    display: flex;
    justify-content: center;
}

.tombol button{
    width: 120px;
    height: 30px;
    border-radius: 10px;
    background-color: #FF7686;
    color: white;
    font-weight: 300px;
}

.tombol button:hover{
    background-color: #E76161;
}

button p{
    font-weight: bold;
    font-size: larger;
    font-family: "Montserrat";
}

.name{
    border-bottom: 3px solid #FF7686;
    width: 235px;
    margin-top: px;
}

.name input{
    width: 235px;
}

.password{
    border-bottom: 3px solid #FF7686;
    width: 235px;
    margin-top: 60px;
}

input::placeholder{
    color: #FF7686;
}

input[type="text"] {
    border: none;
    background: none;
    outline: none;
    color: black;
}

input[type="password"] {
    border: none;
    background: none;
    outline: none;
    color: black;
}

.submit{
    display: flex;
    width: 235px;
    margin-bottom: -50px;
    margin-top: 40px;
    justify-content: center;
}

button{
    padding: 2px 30px;
    background-color:  #FF7686;
    border-radius: 10px;
}

button p{
    color: white;
    font-family: "poppins";
}


</style>