<?php
// contact.php — slanje mejla sa kontakt forme
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');

  // Email konfiguracija
  $to = "adatel@adatel.rs";
  $subject = "Nova poruka sa sajta - od: " . $name;
  
  // Sadržaj mejla
  $email_body = "Primili ste novu poruku sa kontakt forme:\n\n";
  $email_body .= "Ime: " . $name . "\n";
  $email_body .= "Email: " . $email . "\n";
  $email_body .= "Poruka:\n" . $message . "\n";
  
  // Email headers
  $headers = "From: adatel@adatel.rs\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();
  
  // Pokušaj slanja mejla
  $mail_sent = mail($to, $subject, $email_body, $headers);
  
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
      <?php if (isset($mail_sent) && $mail_sent): ?>
        <h1>Hvala na poruci!</h1>
        <p>Vaša poruka je uspešno poslata. Odgovorićemo vam u najkraćem mogućem roku.</p>
      <?php else: ?>
        <h1>Došlo je do greške</h1>
        <p>Nažalost, poruka nije mogla biti poslata. Molimo pokušajte ponovo ili nas kontaktirajte direktno na office@adatel.rs</p>
      <?php endif; ?>
      
      <a class="btn btn-accent" href="index.php">Povratak na početnu</a>
    </div>
  </main>
</body>
</html>