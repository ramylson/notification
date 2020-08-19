<?php
require __DIR__ . '/vendor/autoload.php';

use Notification\email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste","<p>Esse é um e-mail de <b>teste</b></p>","teste@teste.com.br","Ramylson","ramylsondacosta@gmail.com","Ramylson");

var_dump($novoEmail);