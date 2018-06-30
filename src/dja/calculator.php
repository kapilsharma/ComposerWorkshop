<?php

require __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Console\Application;
use dja\commands\Calculate;

$application = new Application();

// ... register commands
$application->add(new Calculate());

$application->run();