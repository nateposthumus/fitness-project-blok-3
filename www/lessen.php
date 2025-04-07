<!-- http://localhost:8080/phpmyadmin -->

<?php
$title = "Fitness | blok3";
 
require "database_connection.php";
 
// selecteer alle data uit de fitnesslessen tabel
$query = "SELECT * FROM `fitnesslessen`";
$result = mysqli_query($conn, $query); 
$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);


$les1 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 1")->fetch_assoc()['naam'];
$les2 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 2")->fetch_assoc()['naam'];
$les3 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 3")->fetch_assoc()['naam'];
$les4 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 4")->fetch_assoc()['naam'];
$les5 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 5")->fetch_assoc()['naam'];
$les6 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 6")->fetch_assoc()['naam'];
$les7 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 7")->fetch_assoc()['naam'];
$les8 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 8")->fetch_assoc()['naam'];
$les9 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 9")->fetch_assoc()['naam'];
$les10 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 10")->fetch_assoc()['naam'];
$les11 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 11")->fetch_assoc()['naam'];
$les12 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 12")->fetch_assoc()['naam'];
$les13 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 13")->fetch_assoc()['naam'];
$les14 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 14")->fetch_assoc()['naam'];
$les15 = $conn->query("SELECT naam FROM fitnesslessen WHERE id = 15")->fetch_assoc()['naam'];

// ===================================================================
// type work out ophalen
// ===================================================================
$result = $conn->query("SELECT * FROM fitnesslessen");

$lessen = [];

while ($row = $result->fetch_assoc()) {
    $lessen[] = [
        "ID: " . $row['id'],
        "Naam: " . $row['naam'],
        "Type: " . $row['type_workout'],
        "Moeilijkheidsgraad: " . $row['moeilijkheidsgraad'],
        "Duur: " . $row['duur'] . " minuten",
        "Dag van de week: " . $row['dag_van_week'],
        "Tijdstip: " . $row['tijdstip'],
        "Instructeur: " . $row['instructeur'],
        "Max deelnemers: " . $row['max_deelnemers'],
        "Calorieën: " . $row['calorieen'],
        $row['beschrijving'],
        "Prijs: €" . number_format($row['prijs'], 2, ',', '.'),
        "Thumbnail URL: " . $row['thumbnail_url']
    ];
}

// Optional: print everything to test


// ===================================================================



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
        <h2 class="header">ONZE LESSEN</h2>
        <div class="features">
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4><?php echo $les1 ?></h4>
                <p>
                    <?php 
                    
                        echo $lessen[0][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les1.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>Betere Dieet</h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek hoe ons voedingsplan je kan helpen gezonder te eten! Ervaar zelf hoe eenvoudige aanpassingen een groot verschil kunnen maken.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>Online Cursussen</h4>
                <p>
                    Meld je aan voor een gratis online proefles en ontdek hoe flexibel en effectief onze lessen zijn! Ervaar het gemak van leren vanuit huis, zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>Coaches Met Ervaring</h4>
                <p>
                    Meld je aan voor een gratis proefles en leer van ervaren coaches die jou persoonlijk begeleiden! Ontdek hoe deskundige tips en ondersteuning jouw doelen sneller bereikbaar maken.
                </p>
                <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4><?php echo $les1 ?></h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek zelf hoe leuk en effectief onze trainingen zijn! Schrijf je vandaag in en ervaar de ultieme workout zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>Betere Dieet</h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek hoe ons voedingsplan je kan helpen gezonder te eten! Ervaar zelf hoe eenvoudige aanpassingen een groot verschil kunnen maken.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>Online Cursussen</h4>
                <p>
                    Meld je aan voor een gratis online proefles en ontdek hoe flexibel en effectief onze lessen zijn! Ervaar het gemak van leren vanuit huis, zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>Coaches Met Ervaring</h4>
                <p>
                    Meld je aan voor een gratis proefles en leer van ervaren coaches die jou persoonlijk begeleiden! Ontdek hoe deskundige tips en ondersteuning jouw doelen sneller bereikbaar maken.
                </p>
                <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4><?php echo $les1 ?></h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek zelf hoe leuk en effectief onze trainingen zijn! Schrijf je vandaag in en ervaar de ultieme workout zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>Betere Dieet</h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek hoe ons voedingsplan je kan helpen gezonder te eten! Ervaar zelf hoe eenvoudige aanpassingen een groot verschil kunnen maken.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>Online Cursussen</h4>
                <p>
                    Meld je aan voor een gratis online proefles en ontdek hoe flexibel en effectief onze lessen zijn! Ervaar het gemak van leren vanuit huis, zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>Coaches Met Ervaring</h4>
                <p>
                    Meld je aan voor een gratis proefles en leer van ervaren coaches die jou persoonlijk begeleiden! Ontdek hoe deskundige tips en ondersteuning jouw doelen sneller bereikbaar maken.
                </p>
                <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4><?php echo $les1 ?></h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek zelf hoe leuk en effectief onze trainingen zijn! Schrijf je vandaag in en ervaar de ultieme workout zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>Betere Dieet</h4>
                <p>
                    Meld je aan voor een gratis proefles en ontdek hoe ons voedingsplan je kan helpen gezonder te eten! Ervaar zelf hoe eenvoudige aanpassingen een groot verschil kunnen maken.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>Online Cursussen</h4>
                <p>
                    Meld je aan voor een gratis online proefles en ontdek hoe flexibel en effectief onze lessen zijn! Ervaar het gemak van leren vanuit huis, zonder verplichtingen.
                </p>
                <a href="#">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>Coaches Met Ervaring</h4>
                <p>
                    Meld je aan voor een gratis proefles en leer van ervaren coaches die jou persoonlijk begeleiden! Ontdek hoe deskundige tips en ondersteuning jouw doelen sneller bereikbaar maken.
                </p>
                <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>
</body>
</html>