<?php
/*
 *      koneksi.php
 *      Melakukan koneksi ke database
 */
$user = "azure";
$host = "localhost";
$pass = "6#vWHD_$";
$db = "simdes";
$conn = mysqli_connect($host,$user,$pass,$db) or die("koneksi gagal");

?>
