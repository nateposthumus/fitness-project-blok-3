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
    <title><?php $title ?></title>
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

    <section class="container">
        <h2 class="header">ONZE PRIJZEN</h2>
        <p class="sub-header">
            Onze prijsplannen bieden verschillende lidmaatschapsniveaus, elk afgestemd op jouw fitnessdoelen en trainingsvoorkeuren. Kies het plan dat bij je past en bereik jouw topvorm met de juiste ondersteuning!
        </p>
        <div class="pricing">
            <div class="card">
                <div class="content">
                    <h4>Proefles</h4>
                    <h3>$0</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Smart coding plan
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        At home workouts
                    </p>
                </div>
                <button class="btn">Join Now</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Basisplan</h4>
                    <h3>$14,99</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Pro codes
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Smart coding plan
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        At home workouts
                    </p>
                </div>
                <button class="btn">Join Now</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Goud Plan</h4>
                    <h3>$39,99</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Elite Classes & Courses
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Pro codes
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Personal Coaching
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Smart coding plan
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        At home workouts
                    </p>
                </div>
                <button class="btn">Join Now</button>
            </div>
        </div>
    </section>
</body>
</html>