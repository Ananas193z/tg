<?php

$mail_settings_dev = [
    'host' => 'smtp.mailtrap.io',
    'auth' => true,
    'port' => 2525,
    'username' => '7c81af8159090a',
    'password' => '1e55c8a23376af',
    'secure' => null,
    'charset' => 'UTF-8',
    'from' => 'd2bcd452a7-103dea@inbox.mailtrap.io',
    'name' => 'WebForMyself',
    'is_html' => true,
];

$mail_settings_prod = [
    'host' => 'smtp.gmail.com',
    'auth' => true,
    'port' => 465, // 587
    'username' => 'your_email@gmail.com',
    'password' => 'your_password',
    'secure' => 'ssl', // tls
    'charset' => 'UTF-8',
    'from' => 'your_email@gmail.com',
    'name' => 'WebForMyself',
    'is_html' => true,
];
