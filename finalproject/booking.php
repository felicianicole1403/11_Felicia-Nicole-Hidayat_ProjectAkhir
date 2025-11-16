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
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="booking" style="background: linear-gradient(135deg, #e8f1ff, #ffffff); padding: 40px 20px; min-height: 100vh;">
    <a href="Index2.html">< BACK</a><br>
    <a href="tambah.php">+ ADD BOOKING DATA</a>
<br/>
<br/>
<table border="1" style="margin-left: auto; margin-right: auto;">
    <tr>
        <th>No</th>
        <th>Fullname</th>
        <th>Gender</th>
        <th>Date</th>
        <th>Location</th>
        <th>Booked at</th>
        <th>Option</th>
    </tr>   
    </div>
    <?php
    include 'koneksi.php';
    $finalproject = mysqli_query($koneksi,"select * from bookings");
    while($f = mysqli_fetch_array($finalproject)){
        ?>
        <tr>
            <td><?php echo $f['booking_number']; ?></td>
            <td><?php echo $f['fullname']; ?></td>
            <td><?php echo $f['gender']; ?></td>
            <td><?php echo $f['date']; ?></td>
            <td><?php echo $f['location']; ?></td>
            <td><?php echo $f['booked_at']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $f['booking_number']; ?>">UPDATE</a>
                <a href="hapus.php?id=<?php echo $f['booking_number']; ?>">DELETE</a>
            </td>
        </tr>   
        <?php
    }
    ?>
</table>
</div>
</body>
</html>