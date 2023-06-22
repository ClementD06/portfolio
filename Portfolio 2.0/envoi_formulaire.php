<?php
require 'vendor/autoload.php'; // Inclure le fichier autoload de Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $coordonnees = $_POST['coordonnees'];
  $message = $_POST['message'];

  // Configuration des paramètres SMTP
  ini_set('SMTP', 'smtp.orange.fr');
  ini_set('smtp_port', 465);

  // Informations d'authentification
  $smtpUsername = 'clement06.dupuis@orange.fr';
  $smtpPassword = 'Choupimolly8490.';

  // Paramètres d'en-tête
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // Configuration des options de l'envoi d'e-mail
  $smtpOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    ),
    'auth' => true,
    'username' => $smtpUsername,
    'password' => $smtpPassword
  );

  // Création du transport SMTP
  $transport = new PHPMailer(true);
  $transport->isSMTP();
  $transport->Host = 'smtp.orange.fr';
  $transport->SMTPAuth = true;
  $transport->SMTPSecure = 'ssl';
  $transport->Port = 465;
  $transport->Username = $smtpUsername;
  $transport->Password = $smtpPassword;

  // Envoi du courrier électronique
  $transport->setFrom('webmaster@example.com', 'Webmaster PortFolio');
  $transport->addAddress('clement06.dupuis@orange.fr', 'Clement Dupuis');
  $transport->Subject = 'Nouveau message du formulaire de contact de votre Portfolio';
  $transport->Body = "Nom: $nom\nPrenom: $prenom\nCoordonnees: $coordonnees\nMessage: $message";

  try {
    $transport->send();
    echo 'Votre message a ete envoye avec succes. Nous vous contacterons bientot.';
    echo '<br><br>';
    echo '<a href="index.html">Retourner au site</a>'; // Lien vers index.html
  } catch (Exception $e) {
    echo 'Une erreur est survenue lors de l\'envoi du message.';
    echo 'Erreur: ' . $e->getMessage();
  }
}
?>
