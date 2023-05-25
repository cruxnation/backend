<?php declare(strict_types = 1);

namespace App\GraphQL;

interface LocationAccessor
{
    public function getRegion() : Region;

    public function getArea() : Area;

    public function getCrag() : Crag;

    public function getSector() : Sector;
}
