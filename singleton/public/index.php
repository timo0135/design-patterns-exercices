<?php
require('../vendor/autoload.php');


use App\Config;

$config = Config::getInstance();
$dbHost = $config->get('db')['host'];
$apiKey = $config->get('apiKey');

echo "Database Host: " . $dbHost . PHP_EOL;
echo "API Key: " . $apiKey . PHP_EOL;