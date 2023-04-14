<?php
session_start();
include('barnav.php');
?>

<body class="bg-gray-200">

  <div class="max-w-md mx-auto mt-4 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-center font-bold text-2xl mb-4">Authentification</h1>
    <form method="POST" action="verification.php">
      <div class="mb-4">
        <label for="username" class="block text-gray-700 font-bold mb-2">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 font-bold mb-2">Mot de passe:</label>
        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Se connecter</button>
      </div>
    </form>
  </div>

</body>

</html>