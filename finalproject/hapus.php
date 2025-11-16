<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$booking_number = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from bookings where booking_number='$booking_number'");

//mengalihkan halaman kembali ke index.php
header("location:booking.php");

?>