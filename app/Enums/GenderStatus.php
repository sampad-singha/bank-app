<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum GenderStatus:string
{
    case M  = 'm';
    case F = 'f';
    case O = 'o';
    public function getLabel():?string
    {
        return match ($this){
            self::M=>'Male',
            self::F=>'Female',
            self::O=>'Other'
        };
    }
}
