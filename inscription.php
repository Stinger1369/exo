<?php include('barnav.php'); ?>

<body>

  <div class="container mx-auto px-4">
    <h2 class="text-center text-2xl font-bold mt-8">Inscription</h2>
    <form action="ajout_utilisateur.php" method="POST" class="w-full max-w-sm mx-auto mt-8">
      <div class="mb-4">
        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe:</label>
        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">S'inscrire</button>
    </form>
  </div>
</body>

</html>