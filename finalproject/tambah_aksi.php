<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$desc = $_POST['description'];
$date = $_POST['date'];
$location = $_POST['location'];

// menginput data ke database
mysqli_query($koneksi,"insert into bookings(fullname, gender, email, phone_number, description, date, location) values('$fullname','$gender','$email','$phone','$desc','$date','$location')");

// mengalihkan halaman kembali ke index.php
header("location:booking.php");

?>