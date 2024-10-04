<?php

namespace App\Enums;

enum FeelList: int
{
    case GOOD   = 1;
    case NORMAL = 2;
    case BAD    = 3;

    public function isGood()
    {
        return $this === self::GOOD;
    }

    public function getImage()
    {
        return match($this) {
            self::GOOD    => "/static/images/common/star/good.svg",
            self::NORMAL  => "/static/images/common/star/normal.svg",
            self::BAD     => "/static/images/common/star/bad.svg",
        };
    }

    public function getLabel() {
        return match($this) {
            self::GOOD    => "良い夢",
            self::NORMAL  => "普通の夢",
            self::BAD     => "悪い夢",
        };
    }
}
