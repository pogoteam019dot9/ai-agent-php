<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Agent.php';

$agent = new Agent();
$prompt = $argv[1] ?? 'Hello';

echo $agent->run($prompt) . PHP_EOL;
