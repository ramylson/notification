<?php
require __DIR__ . '/../vendor/autoload.php';

use Notification\email;

$novoEmail = new Email(2,"email-ssl.com.br","teste@teste.com.br","senhadoemail","ssl","465","teste@teste.com.br","Seu N. Nome");
$novoEmail->sendMail("Assunto de teste","<p>Esse é um e-mail de <b>teste</b></p>","teste@teste.com.br","Ramylson","ramylsondacosta@gmail.com","Ramylson");

var_dump($novoEmail);