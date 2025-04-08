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
        <h2 class="header">OVER ONS</h2>
        <p class="sub-header">
            //lorem = stuk tekst in het latijns, als een soort placeholder. <br> <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis impedit in officia perferendis quae odio dolore ad deleniti tenetur ullam placeat voluptatem, facere assumenda consequuntur ipsum, officiis cupiditate explicabo?
        </p>
</body>
</html>