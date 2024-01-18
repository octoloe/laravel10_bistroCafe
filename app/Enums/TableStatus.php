<?php

namespace App\Enums;

enum TableStatus: string
{
    case Ausstehend = 'Ausstehend';
    case Verfügbar = 'Verfügbar';
    case Vergeben = 'Vergeben';
}
