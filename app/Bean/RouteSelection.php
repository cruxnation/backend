<?php declare(strict_types = 1);

namespace App\Bean;

/**
 * @method \App\Bean\Route current() : \CoolBeans\Bean
 * @method \App\Bean\Route|null fetch() : ?\CoolBeans\Bean
 */
final class RouteSelection extends \CoolBeans\Selection
{
    protected const ROW_CLASS = Route::class;
}
