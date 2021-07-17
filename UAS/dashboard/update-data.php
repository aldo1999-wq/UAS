<?php

    //include koneksi database
    include('../db_connect.php');

    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $rawat = $_POST['dirawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    //query update data ke dalam database berdasarkan ID
    $query = mysqli_query($connection, "UPDATE data_covid SET wilayah = '$wilayah', positif = '$positif', dirawat = '$rawat', sembuh = '$sembuh', meninggal = '$meninggal'  WHERE id = '$id'");

    //redirect ke halaman index.php 
    header("location: view.php");

?>