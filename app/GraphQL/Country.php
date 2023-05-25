<?php declare(strict_types = 1);

namespace App\GraphQL;

#[\Graphpinator\Typesystem\Attribute\Description('Stát')]
final class Country extends \Graphpinator\Typesystem\EnumType
{
    public function __construct()
    {
        parent::__construct(self::fromEnum(\App\Enum\Country::class));
    }
}
