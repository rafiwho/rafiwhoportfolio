<?php

require_once __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Building static HTML files...\n";

$view = app('view');

try {
    $htmlContent = $view->make('index')->render();
    
    file_put_contents(__DIR__.'/dist/index.html', $htmlContent);
    echo "✓ Generated index.html\n";
    
    echo "✓ Static build completed successfully!\n";
    
} catch (Exception $e) {
    echo "✗ Error building static files: " . $e->getMessage() . "\n";
    exit(1);
} 