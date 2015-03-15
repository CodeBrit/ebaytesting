<?php
error_reporting(E_ALL);

require 'vendor/autoload.php';

// Create a client with a base URL
$client = new GuzzleHttp\Client(['base_url' => 'https://github.com']);

?>