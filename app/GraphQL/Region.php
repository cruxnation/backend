<?php declare(strict_types = 1);

namespace App\GraphQL;

use \Graphpinator\Typesystem\Field\ResolvableField;
use \Graphpinator\Typesystem\Container;

#[\Graphpinator\Typesystem\Attribute\Description('')]
final class Region extends \Graphpinator\Typesystem\Type
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
        return $rawValue instanceof \App\Bean\Region;
    }

    protected function getFieldDefinition() : \Graphpinator\Typesystem\Field\ResolvableFieldSet
    {
        return new \Graphpinator\Typesystem\Field\ResolvableFieldSet([
            ResolvableField::create(
                'name',
                Container::String()->notNull(),
                static function (\App\Bean\Region $region) : string {
                    return $region->name;
                },
            ),
            ResolvableField::create(
                'country',
                $this->country->notNull(),
                static function (\App\Bean\Region $region) : \App\Enum\Country {
                    return $region->country;
                },
            ),
            ResolvableField::create(
                'areas',
                $this->locationAccessor->getArea()->notNullList(),
                static function (\App\Bean\Region $region) : \App\Bean\AreaSelection {
                    return $region->getAreas();
                },
            ),
        ]);
    }
}
