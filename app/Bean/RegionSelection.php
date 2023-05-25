<?php declare(strict_types = 1);

namespace App\Bean;

/**
 * @method \App\Bean\Region current() : \CoolBeans\Bean
 * @method \App\Bean\Region|null fetch() : ?\CoolBeans\Bean
 */
final class RegionSelection extends \CoolBeans\Selection
{
    protected const ROW_CLASS = Region::class;
}
