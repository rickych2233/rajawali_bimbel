<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\ArgumentCountError $e, \Illuminate\Http\Request $request) {
            if (str_contains($e->getMessage(), 'createDriver')) {
                $trace = $e->getTrace();
                $classes = [];
                foreach ($trace as $frame) {
                    if (isset($frame['object'])) {
                        $classes[] = get_class($frame['object']);
                    } elseif (isset($frame['class'])) {
                        $classes[] = $frame['class'];
                    }
                }
                $classesList = implode(' -> ', array_unique($classes));
                return response("<h1 style='color:red;'>VERCEL DEBUG: Trace classes: {$classesList}</h1><p>Please check your Vercel Environment Variables. One of the variables for this manager is set to an empty string in the Vercel Dashboard!</p>", 500);
            }
        });
    })->create();

if (isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']) || getenv('VERCEL')) {
    $app->useStoragePath('/tmp/storage');
    $directories = [
        'logs',
        'framework/views',
        'framework/cache/data',
        'framework/sessions',
        'bootstrap/cache',
    ];
    foreach ($directories as $dir) {
        $path = '/tmp/storage/' . $dir;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}

return $app;
