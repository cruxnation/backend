<?php declare(strict_types = 1);

namespace App\Enum;

use \Graphpinator\Typesystem\Attribute\Description;

enum RouteType : string
{
    #[Description('Route for climbing with rope')]
    case ROCK = 'ROCK';
    #[Description('Bouldering route')]
    case BOULDER = 'BOULDER';
}
