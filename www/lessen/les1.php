<?php
$title = "Fitness | blok3";
 
require "../database_connection.php";
;
 
// selecteer alle data uit de fitnesslessen tabel
$query = "SELECT * FROM `fitnesslessen`";
$result = mysqli_query($conn, $query); 
$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);




$result = $conn->query("SELECT * FROM fitnesslessen");

$lessen = [];

while ($row = $result->fetch_assoc()) {
    $lessen[] = [
        "ID: " . $row['id'],
        $row['naam'],
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

//  <img class=thumbnail src=<?php $lessen[][12]> alt="<?php $lessen[0][12]>"> ????????? 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="/style.css">
    <title><?php echo $title ?></title>
</head>
<body>

<nav>
        <div class="nav-logo">
            <a href="/index.php">
                <img src="../images/logo.png">
            </a>
        </div>

        <ul class="nav-links">
        <li class="link"><a href="/index.php">HOME</a></li>
            <li class="link"><a href="../lessen.php">LESSEN</a></li>
            
            <li class="link"><a href="../over_ons.php">OVER ONS</a></li>
        </ul>
        <button class="btn">Contact Opnemen</button>
    </nav>

    <section class="container">
        <h2 class="header">ONZE LESSEN</h2>
        <div class="features">
            <div class="card">
                <span><?php echo $lessen[0][1] ?> <br></span>
                <h4><?php echo $lessen[0][11] ?></h4>
                <p>
                
                    
                    <?php echo $lessen[0][2] ?> <br>
                    <?php echo $lessen[0][3] ?> <br>
                    <?php echo $lessen[0][4] ?> <br>
                    <?php echo $lessen[0][5] ?> <br>
                    <?php echo $lessen[0][6] ?> <br>
                    <?php echo $lessen[0][7] ?> <br>
                    <?php echo $lessen[0][8] ?> <br>
                    <?php echo $lessen[0][9] ?> <br>
                    <?php echo $lessen[0][10] ?> <br>
                    

                    
                    
                    

                    
                </p>
                
            </div>
        </div>
    </section>

    
</body>
</html>