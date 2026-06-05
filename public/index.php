<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../app/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader from the app/ subdirectory
require __DIR__.'/../app/vendor/autoload.php';

// Bootstrap Laravel and handle the request from the app/ subdirectory
(require_once __DIR__.'/../app/bootstrap/app.php')
    ->handleRequest(Request::capture());