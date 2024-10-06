<?php
$to='mananbhatt2651@gmail.com';
$from='196330316007.manan.bhatt@gmail.com';
$subject='This is a test email';
$message='Hey';
$headers=[
    'MIME-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf8',
    'From' => '196330316007.manan.bhatt@gmail.com',
    'Reply-To' => 'mananbhatt2651@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
]; 
echo phpversion();

if (mail($to, $subject, $message,$from)) {
    echo 'email was sent.';
} else {
    echo 'An error occurred.';
}