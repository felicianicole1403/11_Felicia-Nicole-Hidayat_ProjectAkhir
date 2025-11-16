<!DOCTYPE html>
<html>
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
<style>
h2, h3 {
    text-align: center;
    color: #2b3a8a;
    font-weight: 700;
}

.jumbotron {
    position: relative;
    width: 100%;
    height: 300px;
    background: url('Jumbotron-img.jpg') center/cover no-repeat;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.jumbotron-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(43, 58, 138, 0.5); 
}

.jumbotron-title {
    position: relative;
    z-index: 5;
    font-size: 70px;
    font-weight: 700;
    color: #ffffff;
}

a {
    color: #2b3a8a;
    text-decoration: none;
    font-weight: 600;
    margin-left: 10px;
}

a:hover {
    text-decoration: underline;
}

form {
    background: white;
    width: 500px;
    margin: 30px auto;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

table {
    width: 100%;
}

td {
    padding: 10px 0;
    color: #333;
    font-weight: 500;
}
input[type="text"],
input[type="number"],
input[type="date"],
select {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #b9c4ff;
    background: #eef2ff;
    font-size: 14px;
    outline: none;
    transition: 0.2s ease-in-out;
}
input:focus,
select:focus {
    border-color: #2b3a8a;
    background: #ffffff;
}
input[type="submit"] {
    background: #2b3a8a;
    color: white;
    border: none;
    display: block;
    padding: 12px 18px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

input[type="submit"]:hover {
    background: #1d2a70;
}
</style>
<body>
<div class="jumbotron text-white text-center">
  <div class="jumbotron-overlay"></div>
  <h1 class="jumbotron-title">Turning Your Vision Into Reality</h1>
</div>
<br/>
<a href="booking.php">< BACK</a>
<br/>
<br/>
    <h3>ADD DATA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
            <td>Gender</td>
            
           <td><select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="phone_number"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>