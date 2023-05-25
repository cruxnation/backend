<?php declare(strict_types = 1);

namespace App\Bean;

/**
 * @method \App\Bean\Area current() : \CoolBeans\Bean
 * @method \App\Bean\Area|null fetch() : ?\CoolBeans\Bean
 */
final class AreaSelection extends \CoolBeans\Selection
{
    protected const ROW_CLASS = Area::class;
}
