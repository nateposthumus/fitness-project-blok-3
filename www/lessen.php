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
// type work out ophalen (met sorteer opties)
// ===================================================================
$sort = $_GET['sort'] ?? null;

switch ($sort) {
    case 'price':
        $query = "SELECT * FROM fitnesslessen ORDER BY prijs ASC";
        break;
    case 'name':
        $query = "SELECT * FROM fitnesslessen ORDER BY naam ASC";
        break;
    case 'time':
        $query = "SELECT * FROM fitnesslessen ORDER BY tijdstip ASC";
        break;
    default:
        $query = "SELECT * FROM fitnesslessen";
}

$result = $conn->query($query);

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



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="nav-logo">
            <a href="index.php">
                <img src="images/logo.png">
            </a>
        </div>

        <ul class="nav-links">
        <li class="link"><a href="index.php">HOME</a></li>
            <li id="link1" class="link"><a href="lessen.php">LESSEN</a></li>
            
            <li id="link3" class="link"><a href="over_ons.php">OVER ONS</a></li>
        </ul>
        <button class="btn">Contact Opnemen</button>
    </nav>

    

    <section class="container">
        <h2 class="header">ONZE LESSEN</h2>
        <div class="features">
            <div class="card">
                <span><?php echo $les1 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //1
                        echo $lessen[0][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les1.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            
            <div class="card">
            <span><?php echo $les2 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //2
                        //[rij][kollom]
                        echo $lessen[1][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les2.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les3 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //3
                        //[rij][kollom]
                        echo $lessen[2][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les3.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les4 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //4
                        //[rij][kollom]
                        echo $lessen[3][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les4.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les5 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //5
                        //[rij][kollom]
                        echo $lessen[4][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les5.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les6 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //6
                        //[rij][kollom]
                        echo $lessen[5][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les6.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les7 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //7
                        //[rij][kollom]
                        echo $lessen[6][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les7.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les8 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //8
                        //[rij][kollom]
                        echo $lessen[7][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les8.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les9 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //9
                        //[rij][kollom]
                        echo $lessen[8][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les9.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les10 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //10
                        //[rij][kollom]
                        echo $lessen[9][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les10.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les11 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //11
                        //[rij][kollom]
                        echo $lessen[10][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les11.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les12 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //12
                        //[rij][kollom]
                        echo $lessen[11][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les12.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les13 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //13
                        //[rij][kollom]
                        echo $lessen[12][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les13.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les14 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //5
                        //[rij][kollom]
                        echo $lessen[13][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les14.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
            <span><?php echo $les15 ?></span>
                <h4></h4>
                <p>
                    <?php 
                        //5
                        //[rij][kollom]
                        echo $lessen[14][10] . "<br>";
                        

                    ?>
                </p>
                <a href="lessen/les15.php">Wordt Nu Lid!<i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>
</body>
</html>