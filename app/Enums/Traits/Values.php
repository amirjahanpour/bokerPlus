<?php

namespace App\Enums\Traits;

/**
 * Api exception handler Trait
 *
 */
trait Values
{

    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }

    public static function translates(): array
    {
        $arrayValue = array_column(static::cases(), 'value');
        $array = [];
        foreach ($arrayValue as $item) {
            $array[$item] = __($item);
        }
        return $array;
    }

    public static function options(): array
    {
        return array_column(static::cases(), 'name', 'value');
    }

}
