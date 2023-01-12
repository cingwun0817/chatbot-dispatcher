<?php

require __DIR__ . '/../vendor/autoload.php';

use App\BotDispatcher;

$params = [
    'condition' => 'c',
    'time' => date('Y/m/d H:i:s'),
];

$messagePayload = (new BotDispatcher())->run($params);

print_r($messagePayload);
exit;
