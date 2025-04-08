<?php
$servername = "localhost"; // or your server
$username = "root"; // your database username
$password = "password"; // your database password
$dbname = "blok3_fitness"; // your database name

$conn = mysqli_connect("mariadb:3306", "root", "password", "blok3_fitness");

if ($conn) {
    echo "DB CONNECTED ✅";
}
else{
    echo "DB NOT CONNECTED ❌";
    die("Connection failed: " . mysqli_connect_error());
}



?>

<!-- commit = git commit -a -m "comment" -->