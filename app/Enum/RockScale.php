<?php declare(strict_types = 1);

namespace App\Enum;

use \Graphpinator\Typesystem\Attribute\Description;

enum RockScale : string
{
    #[Description('French grading scale (6c+, 7a, 7a+, ...)')]
    case FRENCH = 'FRENCH';
    #[Description('UIAA grading scale (8, 8+, 9-, ...)')]
    case UIAA = 'UIAA';
    #[Description('Yosemite Decimal System (5.9, 5.10a, 5.10b, ...)')]
    case YDS = 'YDS';
}
