<?php
require('config.php');
session_start();
include('barnav.php');

// Vérifie si les données ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupère les données soumises
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Requête pour récupérer l'utilisateur correspondant
  $sql = "SELECT * FROM user WHERE USER = '$username'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['PASSWORD'] === $password) {
      $_SESSION['user_id'] = $row['ID'];
      $_SESSION['username'] = $row['USER'];
?>
      <div class="bg-green-100 border border-green-400 text-center text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">Bienvenue, <?php echo $row['USER']; ?>!</span>
      </div>
    <?php
    } else {
    ?>
      <div class="bg-red-100 border border-red-400 text-center text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">Erreur d'authentification: nom d'utilisateur ou mot de passe incorrect.</span>
      </div>
<?php
    }
  }

  // Ferme la connexion à la base de données
  mysqli_close($conn);

  // Efface toute sortie de texte en tampon
  ob_clean();

  
  header("Location: portfolio.php");
  exit;
} else {
  
  header("Location: portfolio.php");
  exit;
}


include('barnav.php');
?>