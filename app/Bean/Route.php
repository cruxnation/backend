<?php declare(strict_types = 1);

namespace App\Bean;

use \CoolBeans\PrimaryKey\IntPrimaryKey;

final class Route extends \CoolBeans\Bean
{
    public IntPrimaryKey $id;
    public \App\Enum\Country $country;
    public IntPrimaryKey $region_id;
    public IntPrimaryKey $area_id;
    public IntPrimaryKey $crag_id;
    public IntPrimaryKey $sector_id;
    public string $name;

    public function getRegion() : Region
    {
        return new Region($this->ref('region', 'region_id'));
    }

    public function getArea() : Area
    {
        return new Area($this->ref('area', 'area_id'));
    }

    public function getCrag() : Crag
    {
        return new Crag($this->ref('crag', 'crag_id'));
    }

    public function getSector() : Sector
    {
        return new Sector($this->ref('sector', 'sector_id'));
    }
}
