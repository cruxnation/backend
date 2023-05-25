<?php declare(strict_types = 1);

namespace App\GraphQL;

use \Graphpinator\Typesystem\Field\ResolvableField;
use \Graphpinator\Typesystem\Container;

#[\Graphpinator\Typesystem\Attribute\Description('')]
final class Area extends \Graphpinator\Typesystem\Type
{
    public function __construct(
        private LocationAccessor $locationAccessor,
    )
    {
        parent::__construct();
    }

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return $rawValue instanceof \App\Bean\Area;
    }

    protected function getFieldDefinition() : \Graphpinator\Typesystem\Field\ResolvableFieldSet
    {
        return new \Graphpinator\Typesystem\Field\ResolvableFieldSet([
            ResolvableField::create(
                'name',
                Container::String()->notNull(),
                static function (\App\Bean\Area $area) : string {
                    return $area->name;
                },
            ),
            ResolvableField::create(
                'region',
                $this->locationAccessor->getRegion()->notNull(),
                static function (\App\Bean\Area $area) : \App\Bean\Region {
                    return $area->getRegion();
                },
            ),
            ResolvableField::create(
                'crags',
                $this->locationAccessor->getCrag()->notNullList(),
                static function (\App\Bean\Area $area) : \App\Bean\CragSelection {
                    return $area->getCrags();
                },
            ),
        ]);
    }
}
