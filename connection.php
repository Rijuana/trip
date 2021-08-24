<?php

// Connecting to the Database
$servername="localhost";
$username="root";
$password="";
$dbname = "trip";

// Check connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ");
}
else{
    echo "  <br>";
}
?>