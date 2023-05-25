<?php declare(strict_types = 1);

namespace App\GraphQL;

use \Graphpinator\Typesystem\Field\ResolvableField;
use \Graphpinator\Typesystem\Container;

#[\Graphpinator\Typesystem\Attribute\Description('')]
final class Sector extends \Graphpinator\Typesystem\Type
{
    public function __construct(
        private LocationAccessor $locationAccessor,
        private Route $route
    )
    {
        parent::__construct();
    }

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return $rawValue instanceof \App\Bean\Sector;
    }

    protected function getFieldDefinition() : \Graphpinator\Typesystem\Field\ResolvableFieldSet
    {
        return new \Graphpinator\Typesystem\Field\ResolvableFieldSet([
            ResolvableField::create(
                'name',
                Container::String()->notNull(),
                static function (\App\Bean\Sector $sector) : string {
                    return $sector->name;
                },
            ),
            ResolvableField::create(
                'crag',
                $this->locationAccessor->getCrag()->notNull(),
                static function (\App\Bean\Sector $sector) : \App\Bean\Crag {
                    return $sector->getCrag();
                },
            ),
            ResolvableField::create(
                'routes',
                $this->route->notNullList(),
                static function (\App\Bean\Sector $sector) : \App\Bean\RouteSelection {
                    return $sector->getRoutes();
                },
            ),
        ]);
    }
}
