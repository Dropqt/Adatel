<?php
$to = "vasilije.sretenovic@adatel.rs"; 
$subject = "Test mejl sa servera";
$message = "Ovo je test poruka da proverim da li PHP mail() funkcija radi.";
$headers = "From: vasilije.sretenovic@adatel.rs";

if(mail($to, $subject, $message, $headers)) {
    echo "Mejl je poslat uspešno!";
} else {
    echo "Greška pri slanju mejla.";
}

// Provera mail konfiguracije
echo "<br><br>PHP mail konfiguracija:<br>";
echo "sendmail_path: " . ini_get('sendmail_path');
?>