<?php

declare(strict_types = 1);

namespace App\Enum;

use \Graphpinator\Typesystem\Attribute\Description;

enum RockRouteType : string
{
    #[Description('Sport climbing')]
    case SPORT = 'SPORT';
    #[Description('Trad climbing and traditional sandstone climbing')]
    case TRAD = 'TRAD';
    #[Description('Multipitch route')]
    case MULTIPITCH = 'MULTIPITCH';
}
