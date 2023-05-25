<?php declare(strict_types = 1);

namespace App\Enum;

use \Graphpinator\Typesystem\Attribute\Description;

enum BoulderingScale : string
{
    #[Description('Fontainebleau grading scale (6C+, 7A, 7A+, ...)')]
    case FONT = 'FONT';
    #[Description('Hueco grading scale (V4, V5, V6, ...)')]
    case HUECO = 'HUECO';
}
