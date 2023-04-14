<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AUTH";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifie la connexion
if (!$conn) {
  die("La connexion a échoué: " . mysqli_connect_error());
}
