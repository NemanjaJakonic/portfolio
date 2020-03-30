<?php

// You need to install the sendgrid client library so run: composer require sendgrid/sendgrid
require 'vendor/autoload.php';
// contains a variable called: $API_KEY that is the API Key.
// You need this API_KEY created on the Sendgrid website.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$API_KEY = getenv('API_KEY');

session_start();
$name = $email = $message = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email_id = $_POST['email'];
    $message = $_POST['message'];

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("nemanjajakonic@gmail.com", "$name");
    $email->setSubject("Contact from : " . $name . " <" . $email_id . ">");
    $email->addTo("nemanjajakonic@gmail.com", "Nemanja Jakonić");
    $email->addContent("text/plain", $message);
    // $email->addContent(
    //     "text/html", );
    $sendgrid = new \SendGrid(getenv($API_KEY));

    if ($sendgrid->send($email));
    {
        $_SESSION['success'] = 'Email sent successfully!';
        header('Location: index.php#contact');
        exit;

    }
}