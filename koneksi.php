<?php
ob_start(); //ditambahkan untuk mengabaikan pengiriman header, berlaku juga untuk mengabaikan pesan error header
$host="localhost";
$user="root";
$pass="";
$db="crud_mysqli";
$koneksi=mysqli_connect($host,$user,$pass,$db);
?>