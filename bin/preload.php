<?php

declare(strict_types = 1);

\chdir(__DIR__);
include __DIR__ . '/../vendor/autoload.php';

$paths = [
    \BrightLogic\Template\Bootstrap::PROJECT_ROOT . '/vendor/nette/application',
    \BrightLogic\Template\Bootstrap::PROJECT_ROOT . '/vendor/infinityloop-dev/graphpinator',
    \BrightLogic\Template\Bootstrap::PROJECT_ROOT . '/vendor/infinityloop-dev/coolbeans',
];

if (!\BrightLogic\Template\Bootstrap::isDebugMode()) {
    $paths[] = \BrightLogic\Template\Bootstrap::APP_ROOT;
}

$preloader = new \BrightLogic\Template\Preloader(...$paths);
$preloader->load();
