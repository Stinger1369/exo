<?php
if (!isset($_SESSION)) {
  session_start();
}
include('config.php');


$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon formulaire</title>
  <!-- Inclusion de la feuille de style Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Inclusion de la librairie Font Awesome -->
  <script src="https://kit.fontawesome.com/5bb8928ade.js" crossorigin="anonymous"></script>
  <script src="https://js.stripe.com/v3/"></script>
</head>

<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="authentification.php" class="text-green-500 font-bold">
            <span>AFPA</span>
          </a>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <a href="/exo/portfolio.php" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Accueil</a>
          <?php if (!$user_id) { ?>
            <a href="/exo/inscription.php" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300 hover:bg-gray-700">Inscription</a>
          <?php } ?>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <?php if ($user_id) { ?>
            <span class="text-white mr-2"><?php echo $_SESSION['username']; ?></span>
            <a href="/exo/deconnexion.php" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">
              <i class="fas fa-sign-out-alt"></i> Se déconnecter
            </a>
          <?php } else { ?>
            <a href="/exo/authentification.php" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">Se connecter</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</nav>