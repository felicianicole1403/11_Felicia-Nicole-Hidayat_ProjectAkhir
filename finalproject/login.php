<?php


session_start();//
include 'koneksi.php';//


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user AND $password == $user['password']){
        $_SESSION['username'] = $user['username'];
        header("Location: Index2.html");
        exit;
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felicia Nicole Hidayat">
    <meta name="keywords" content="insurance, health insurance, life insurance, NEST insurance, affordable, secure future">
    <meta name="description" content="NEST Insurance">
    <title>Login</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
  <h1 class="jumbotron-title" style="margin-top: 80px;">Your Next Great Event Starts Here!</h1>
</div>
    <div class="Login">
    <form method="POST">
      <legend>Sign In to Your Account</legend>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <div class="button-container">
        <button type="submit" name="login" class="submit-button">Login</button>
      </div>

      <p class="text-center mt-4" style="margin-top: 20px;">
        Don’t have an account? <a href="register.php" style="color: var(--primary-color); font-weight: 600;">Sign Up</a>
      </p>
    </form>
  </div>
</body>

</html>
