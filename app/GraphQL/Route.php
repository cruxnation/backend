<?php declare(strict_types = 1);

namespace App\GraphQL;

use \Graphpinator\Typesystem\Field\ResolvableField;
use \Graphpinator\Typesystem\Container;

#[\Graphpinator\Typesystem\Attribute\Description('')]
final class Route extends \Graphpinator\Typesystem\Type
{
    public function __construct(
        private Country $country,
        private LocationAccessor $locationAccessor,
    )
    {
        parent::__construct();
    }

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return $rawValue instanceof \App\Bean\Route;
    }

    protected function getFieldDefinition() : \Graphpinator\Typesystem\Field\ResolvableFieldSet
    {
        return new \Graphpinator\Typesystem\Field\ResolvableFieldSet([
            ResolvableField::create(
                'name',
                Container::String()->notNull(),
                static function (\App\Bean\Route $route) : string {
                    return $route->name;
                },
            ),
            ResolvableField::create(
                'country',
                $this->country->notNull(),
                static function (\App\Bean\Route $route) : \App\Enum\Country {
                    return $route->country;
                },
            ),
            ResolvableField::create(
                'region',
                $this->locationAccessor->getRegion()->notNull(),
                static function (\App\Bean\Route $route) : \App\Bean\Region {
                    return $route->getRegion();
                },
            ),
            ResolvableField::create(
                'area',
                $this->locationAccessor->getArea()->notNull(),
                static function (\App\Bean\Route $route) : \App\Bean\Area {
                    return $route->getArea();
                },
            ),
            ResolvableField::create(
                'crag',
                $this->locationAccessor->getCrag()->notNull(),
                static function (\App\Bean\Route $route) : \App\Bean\Crag {
                    return $route->getCrag();
                },
            ),
            ResolvableField::create(
                'sector',
                $this->locationAccessor->getSector()->notNull(),
                static function (\App\Bean\Route $route) : \App\Bean\Sector {
                    return $route->getSector();
                },
            ),
        ]);
    }
}
