<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Illuminate\Foundation\Bootstrap\BootProviders;

$app = new Application(dirname(__DIR__));

// Bootstrap the application
$app->bootstrapWith([
    LoadEnvironmentVariables::class,
    LoadConfiguration::class,
    HandleExceptions::class,
    RegisterFacades::class,
    RegisterProviders::class,
    BootProviders::class,
]);

// Register routes
require __DIR__.'/../routes/web.php';
require __DIR__.'/../routes/api.php';
require __DIR__.'/../routes/console.php';

// Register middleware
$app->middleware([
    // Add global middleware here
]);

$app->routeMiddleware([
    // Add route middleware here
]);

// Register exception handling
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;