<?php

namespace App\Enums;

enum TimeList: int
{
    case MORING     = 1;
    case NOON       = 2;
    case NIGHT      = 3;
    case EVENING    = 4;

    public function getLabel() {
        return match($this) {
            TimeList::MORING    => "朝",
            TimeList::NOON      => "昼",
            TimeList::NIGHT     => "夜",
            TimeList::EVENING   => "夕",
        };
    }
}
