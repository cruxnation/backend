<?php declare(strict_types = 1);

namespace App\GraphQL;

use \Graphpinator\Typesystem\Field\ResolvableField;
use \Graphpinator\Typesystem\Container;

#[\Graphpinator\Typesystem\Attribute\Description('')]
final class Crag extends \Graphpinator\Typesystem\Type
{
    public function __construct(
        private LocationAccessor $locationAccessor,
    )
    {
        parent::__construct();
    }

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return $rawValue instanceof \App\Bean\Crag;
    }

    protected function getFieldDefinition() : \Graphpinator\Typesystem\Field\ResolvableFieldSet
    {
        return new \Graphpinator\Typesystem\Field\ResolvableFieldSet([
            ResolvableField::create(
                'name',
                Container::String()->notNull(),
                static function (\App\Bean\Crag $crag) : string {
                    return $crag->name;
                },
            ),
            ResolvableField::create(
                'area',
                $this->locationAccessor->getArea()->notNull(),
                static function (\App\Bean\Crag $crag) : \App\Bean\Area {
                    return $crag->getArea();
                },
            ),
            ResolvableField::create(
                'sectors',
                $this->locationAccessor->getSector()->notNullList(),
                static function (\App\Bean\Crag $crag) : \App\Bean\SectorSelection {
                    return $crag->getSectors();
                },
            ),
        ]);
    }
}
