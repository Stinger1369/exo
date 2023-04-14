<?php
require('config.php');
session_start();
include('barnav.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Chiffrement du mot de passe
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Requête pour vérifier si le nom d'utilisateur existe déjà
  $sql_check = "SELECT * FROM user WHERE USER = '$username'";
  $result_check = mysqli_query($conn, $sql_check);

  if (mysqli_num_rows($result_check) > 0) {
    // Nom d'utilisateur déjà utilisé
    echo "<p class='text-center text-red-500'>Ce nom d'utilisateur est déjà utilisé. Veuillez en choisir un autre.</p>";
  } else {
    // Insérer le nouvel utilisateur dans la base de données
    $sql_insert = "INSERT INTO user (USER, PASSWORD) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql_insert)) {
      echo "<p class='text-center text-green-500'>Inscription réussie ! Vous pouvez maintenant vous <a href='authentification.php' class='text-blue 500'>connecter</a>.</p>";
    } else {
      echo "<p class='text-center text-red-500'>Erreur lors de l'inscription. Veuillez réessayer plus tard.</p>";
    }
  }

  // Ferme la connexion à la base de données
  mysqli_close($conn);
} else {
  // Si les données n'ont pas été soumises, redirige vers la page d'inscription
  header('Location: inscription.php');
  exit;
}
?>