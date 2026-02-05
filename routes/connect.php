<?php
// Host, Username, Password, Database Name
// $connect = mysqli_connect("localhost", "root", "", "voting"); 

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
// connect.php mein ye likhein
$connect = mysqli_connect("localhost:3307", "root", "", "voting");
?>