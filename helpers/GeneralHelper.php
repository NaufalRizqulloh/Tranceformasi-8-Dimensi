<?php

namespace Helpers;

class GeneralHelper
{
    public static function isBetweenAnd(int $value,int $min,int $max): bool
    {
        return $value > $min && $value < $max;
    }
}
