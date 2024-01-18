<?php

namespace App\Enums;

enum TableLocation: string
{
    case Vorderseite = 'Vorderseite';
    case Rückseite = 'Rückseite';
    case Drinnen = 'Drinnen';
    case Panoramablick = 'Panoramablick';
    case Sonnenseite = 'Sonnenseite';
}
