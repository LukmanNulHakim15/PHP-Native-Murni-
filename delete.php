<?php

//menghubungkan ke database
include_once('config.php');

//menangkap id
$id = $_GET['id'];

//delete data sesuai id yang ditangkap
$query = mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");

echo "alert('Data anda berhasil dihapus')";
header("Location:index.php");




?>