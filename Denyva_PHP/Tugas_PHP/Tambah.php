<?php
session_start();
require 'Fungsi.php';
if(isset($_POST['submit'])) {
    $data=$_POST['data'];
    $id=$_GET['ID'];
    $sql = "INSERT INTO data_pengguna (ID,DATA,Kondisi,Kunciasing) VALUES ('', '$data','0','$id')";
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    header("Location: main.php");
}?>