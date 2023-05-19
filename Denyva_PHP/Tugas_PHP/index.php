<?php
session_start();
require 'Fungsi.php';
?>
   <!DOCTYPE html>
     <html>
      <head>
       <style>
         body {
        background-image: url('Wow.jpg');
        background-size: cover;
        }

        p {
        color: white;
        }

        .Button {
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        }

        .Button:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .Button a {
        text-decoration: none;
        color: white;
        }

        .Button:hover a {
        color: black;
        }

        form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        }

        h1 {
        color: white;
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        }

        .profil-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        }

        .box {
        width: 200px;
        height: 200px;
        border: 1px solid black;
        border-radius: 10px;
        }
        .profil-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        background-image: url('Denyva.jpeg');
        background-size: cover;
        background-position: center;
        }
        

    </style>
        </head>
        <title>215314074_Denyva</title>
        <body>
        <form method="post" action="cek.php">
        <div class="profil-img"></div>
            </div>
            <h1 style="color: White" class="">Login Form</h1>
            <label id="input_nama" style="margin-right: 10px;">Nama</label>
            <input id="input_nama" name="username"  />
            <br><br>
            <label id="input_password" >Password</label>
            <input id="input_password" name="password"/>
            <br><br>
            <button class="Button" name="submit">Ok</button>
            <br><br>
            <button class="Button" name="Tambah Data" style="margin-top:5px"><a href="Tambah Data.php">User baru</a></button>
            <?php
            error_reporting(0);
            $hasil = $_GET['hasil'];
            if($hasil == 'false') {
                echo "Password atau username salah";
                $hasil = null;
            } else {
                $_SESSION["status"] = "true";
            }
            ?>
        </form>
    </body>
</html>
