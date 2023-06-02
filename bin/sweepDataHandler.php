<?php

declare(strict_types = 1);

\chdir(__DIR__);
require __DIR__ . '/../vendor/autoload.php';

return static function($event) : void {
    $command = \BrightLogic\Template\Bootstrap::getContainer()
        ->getByType(\BrightLogic\Template\StorageFile\SweepDataCommand::class);

    $command->operation();
};
