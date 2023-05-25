<?php declare(strict_types = 1);

namespace App\Bean;

/**
 * @method \App\Bean\Crag current() : \CoolBeans\Bean
 * @method \App\Bean\Crag|null fetch() : ?\CoolBeans\Bean
 */
final class CragSelection extends \CoolBeans\Selection
{
    protected const ROW_CLASS = Crag::class;
}
