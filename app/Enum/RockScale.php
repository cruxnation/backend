<?php declare(strict_types = 1);

namespace App\Enum;

use \Graphpinator\Typesystem\Attribute\Description;

enum RockScale : string
{
    #[Description('French grading scale (6c+, 7a, 7a+, ...)')]
    case FRENCH = 'FRENCH';
    #[Description('UIAA grading scale (8, 8+, 9-, ...)')]
    case UIAA = 'UIAA';
}
