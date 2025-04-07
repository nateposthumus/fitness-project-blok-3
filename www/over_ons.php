<!-- http://localhost:8080/phpmyadmin -->

<?php
$title = "Fitness | blok3";
 
require "database_connection.php";
 
// selecteer alle data uit de fitnesslessen tabel
$query = "SELECT * FROM `fitnesslessen`";
$result = mysqli_query($conn, $query); 
$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <div class="nav-logo">
            <a href="#">
                <img src="images/logo.png">
            </a>
        </div>

        <ul class="nav-links">
        <li class="link"><a href="index.php">HOME</a></li>
            <li id="link1" class="link"><a href="lessen.php">LESSEN</a></li>
            <li id="link2" class="link"><a href="prijzen.php">PRIJZEN</a></li>
            <li id="link3" class="link"><a href="over_ons.php">OVER ONS</a></li>
        </ul>
        <button class="btn">Contact Opnemen</button>
    </nav>
</body>
</html>