<?php declare(strict_types = 1);

namespace App\Bean;

/**
 * @method \App\Bean\Sector current() : \CoolBeans\Bean
 * @method \App\Bean\Sector|null fetch() : ?\CoolBeans\Bean
 */
final class SectorSelection extends \CoolBeans\Selection
{
    protected const ROW_CLASS = Sector::class;
}
