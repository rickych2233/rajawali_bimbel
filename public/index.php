<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

try {
    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (\ArgumentCountError $e) {
    if (str_contains($e->getMessage(), 'createDriver')) {
        $trace = $e->getTrace();
        $managerClass = $trace[0]['class'] ?? 'Unknown';
        echo "<h1 style='color:red;'>VERCEL DEBUG: The manager causing the error is: {$managerClass}</h1>";
        echo "<p>Please check your Vercel Environment Variables. One of the variables for this manager is set to an empty string!</p>";
        exit;
    }
    throw $e;
}
