<?php declare(strict_types = 1);

namespace App\Bean;

final class Sector extends \CoolBeans\Bean
{
    public \CoolBeans\PrimaryKey\IntPrimaryKey $id;
    public \CoolBeans\PrimaryKey\IntPrimaryKey $crag_id;
    public string $name;

    public function getCrag() : Crag
    {
        return new Crag($this->ref('crag', 'crag_id'));
    }

    public function getRoutes() : RouteSelection
    {
        return new RouteSelection($this->related('route', 'sector_id'));
    }
}
