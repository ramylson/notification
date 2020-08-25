<?php
require __DIR__ . '/../vendor/autoload.php';

use Notification\email;

$novoEmail = new Email(2,"host","email@email.com","pass-email","ssl/tls","465/587","email@email.com","Name");
$novoEmail->sendMail("Subject","body","replay Email","replay email","address Email","address Name");

var_dump($novoEmail);