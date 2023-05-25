<?php declare(strict_types = 1);

namespace App\Bean;

final class Crag extends \CoolBeans\Bean
{
    public \CoolBeans\PrimaryKey\IntPrimaryKey $id;
    public \CoolBeans\PrimaryKey\IntPrimaryKey $area_id;
    public string $name;

    public function getArea() : Area
    {
        return new Area($this->ref('area', 'area_id'));
    }

    public function getSectors() : SectorSelection
    {
        return new SectorSelection($this->related('crag_sector', 'crag_id'));
    }

    public function getRoutes() : RouteSelection
    {
        return new RouteSelection($this->related('route', 'crag_id'));
    }
}
