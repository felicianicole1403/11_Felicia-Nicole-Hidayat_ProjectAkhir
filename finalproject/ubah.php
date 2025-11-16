<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$booking_number = $_POST['booking_number'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$desc = $_POST['description'];
$date = $_POST['date'];
$location = $_POST['location'];

//update data ke database
mysqli_query($koneksi,"update bookings set fullname='$fullname', gender='$gender', email='$email', phone_number='$phone', description='$desc', date='$date', location='$location' where booking_number='$booking_number'");

//mengalihkan halaman kembali ke index.php
header("location:booking.php");

?>
