<?php declare(strict_types = 1);

namespace App\Bean;

final class Region extends \CoolBeans\Bean
{
    public \CoolBeans\PrimaryKey\IntPrimaryKey $id;
    public \App\Enum\Country $country;
    public string $name;

    public function getAreas() : AreaSelection
    {
        return new AreaSelection($this->related('area', 'region_id'));
    }

    public function getRoutes() : RouteSelection
    {
        return new RouteSelection($this->related('route', 'region_id'));
    }
}
