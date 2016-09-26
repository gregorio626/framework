<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/init.php';

$input = $request->get('name', 'World');
$input = ucfirst(strtolower($input));
$response->setContent(sprintf('Hello, %s!', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

// Send the response object back to the client(It first outputs the http headers followed by the content)
$response->send();
