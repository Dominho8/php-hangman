<!-- start session -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hangman</title>
  <!-- styling -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/main.css">
</head>
<body>

  <!-- require php files -->
  <?php
    require_once 'config.php';

    require_once 'classes/WordsClass.php';
    require_once 'classes/GraphicsClass.php';
    require_once 'classes/GameClass.php';
  ?>

  <h1>Hello World 🌍</h1>
  
</body>
</html>