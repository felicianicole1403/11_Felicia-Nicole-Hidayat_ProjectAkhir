<?php
// area PHP

include 'koneksi.php';

// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['fullname']; //Menangkap nama lengkap dari form
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];

    // Simpan data ke database
    $query = "INSERT INTO users (username, email, password, fullname, gender, birthday) VALUES ('$username','$email','$password','$name','$gender','$birthday')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silahkan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<!-- area HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felicia Nicole Hidayat">
    <meta name="keywords" content="event organizer, weddings, parties, events, affordable, spectra events">
    <meta name="description" content="SPECTRA EVENTS">
    <title>SPECTRA EVENTS</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body style="background-color: white">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="Navbarlogo.png" alt="Bootstrap" width="150" height="60">
    </a>

    <!-- Toggle button for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Offcanvas Menu (links only) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item"><a class="nav-link mx-lg-2" href="Index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link mx-lg-2" href="AboutUs.html">About Us</a></li>
        </ul>
      </div>
    </div>

    <!-- Login Button stays visible and aligned right -->
    <a href="login.php" class="login-button d-none d-lg-inline-block" style="background-color:white"></a>
  </div>
</nav>
<!--End Navbar-->
<div class="jumbotron text-white text-center">
  <div class="jumbotron-overlay"></div>
  <h1 class="jumbotron-title" style="margin-top: 80px;">Join Us and Start Planning Your Perfect Event!</h1>
</div>
    <!-- Register Form -->
  <div class="Register">
    <form method="POST">
      <legend>Register</legend>

      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter a Username" required>

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Your E-mail" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Create a Password" required>

      <label>Gender</label>
      <div class="gender-group">
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
      </div>

      <label for="birthday">Birthday</label>
      <input type="date" id="birthday" name="birthday" required>

      <div class="button-container">
        <button type="submit" name="register" class="submit-button">Register</button>
      </div>

      <p class="text-center">Already have an account? <a href="login.php">Login Here</a></p>
    </form>
  </div>
</body>
</html>