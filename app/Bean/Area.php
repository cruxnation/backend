<?php declare(strict_types = 1);

namespace App\Bean;

final class Area extends \CoolBeans\Bean
{
    public \CoolBeans\PrimaryKey\IntPrimaryKey $id;
    public \CoolBeans\PrimaryKey\IntPrimaryKey $region_id;
    public string $name;

    public function getRegion() : Region
    {
        return new Region($this->ref('region', 'region_id'));
    }

    public function getCrags() : CragSelection
    {
        return new CragSelection($this->related('crag', 'area_id'));
    }

    public function getRoutes() : RouteSelection
    {
        return new RouteSelection($this->related('route', 'area_id'));
    }
}
