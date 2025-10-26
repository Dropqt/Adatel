<?php
// contact.php — jednostavan “echo” handler za test
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');
} else {
  header('Location: index.php#kontakt');
  exit;
}
?><!doctype html>
<html lang="sr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hvala na poruci — Adatel</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main class="section">
    <div class="container">
      <h1>Hvala na poruci!</h1>
      <p>Primaoc: Adatel doo Beograd</p>
      <div class="card">
        <p><b>Ime:</b> <?= $name ?></p>
        <p><b>Email:</b> <?= $email ?></p>
        <p><b>Poruka:</b><br><?= nl2br($message) ?></p>
      </div>
      <a class="btn btn-accent" href="index.php">Povratak na početnu</a>
    </div>
  </main>
</body>
</html>
