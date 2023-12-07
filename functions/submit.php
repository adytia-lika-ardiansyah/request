<?php
header('Content-Type: application/json');

// Your Telegram bot token
$botToken = '6351447094:AAEunSAuJozgxTenBb1Hm7_T6Ly2NGuIU_k';

// Your chat ID (you can get this by sending "/my_id" to your bot on Telegram)
$chatId = '5712672926';

// Form data
$name = $_POST['name'];
$request = $_POST['request'];

// Message to be sent to Telegram
$message = "New form submission:\nName: $name\nEmail: $email\nRequest: $request";

// Send the message to Telegram
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$message");

// Respond to the form submission
echo json_encode(['status' => 'success']);