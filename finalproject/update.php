<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felicia Nicole Hidayat">
    <meta name="keywords" content="event organizer, weddings, parties, events, affordable, spectra events">
    <meta name="description" content="SPECTRA EVENTS">
    <title>SPECTRA EVENTS</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <a href="booking.php" class="btn btn-back mb-3">< BACK</a>

    <div class="booking-box">
        <h2 class="text-center mb-4 text-primary" style="color:rgb(62, 81, 166)">EDIT YOUR BOOKING</h2>

        <?php
        include 'koneksi.php';
        $booking_number = $_GET['id'];
        $finalproject = mysqli_query($koneksi,"select * from bookings where booking_number='$booking_number'");
        while($f = mysqli_fetch_array($finalproject)){
        ?>

        <form method="post" action="ubah.php">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fullname</label>
                <div class="col-sm-9">
                    <input type="hidden" name="booking_number" value="<?php echo $f['booking_number']; ?>">
                    <input type="text" class="form-control" name="fullname" value="<?php echo $f['fullname']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9 d-flex gap-4 align-items-center">
                    <label><input type="radio" name="gender" value="Male" <?php if($f['gender']=='Male') echo 'checked'; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if($f['gender']=='Female') echo 'checked'; ?>> Female</label>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" value="<?php echo $f['email']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="phone_number" value="<?php echo $f['phone_number']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="description" value="<?php echo $f['description']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="date" value="<?php echo $f['date']; ?>">
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="location" value="<?php echo $f['location']; ?>">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">SAVE</button>
            </div>

        </form>

        <?php } ?>
    </div>
</div>

</body>
</html>