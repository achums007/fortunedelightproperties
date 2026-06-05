<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;



// Force PHP to use our custom local directory for temporary files
$customTmpDir = '/home/u182699369/domains/fortunedelightproperties.ae/public_html/fdp/storage/tmp';
if (!file_exists($customTmpDir)) {
    mkdir($customTmpDir, 0777, true);
}
putenv("TMPDIR={$customTmpDir}");
putenv("TEMP={$customTmpDir}");
putenv("TMP={$customTmpDir}");
ini_set('upload_tmp_dir', $customTmpDir);



define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/app/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/app/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/app/bootstrap/app.php';

$app->handleRequest(Request::capture());
