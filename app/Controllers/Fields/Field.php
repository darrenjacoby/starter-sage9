<?php

namespace App\Controllers\Fields;

class Field
{
    /**
     * Field
     * 
     * Sanitise $raw data according to $return
     * 
     * @param $raw[], $return[]
     * @return [...]
     */
    public static function map($raw, $return) 
    {
        // make sure $raw is an arr
        if (!is_array($raw)) {
            $raw = [$raw];
        }

        // map through $raw
        return array_map(function ($item) use ($return) {
            // map through $return
            return (object) array_map(function ($k, $v) use ($item) {
                // match $return keys to $item->value
                return [
                    $k => $item->$v,
                ];
            // https://stackoverflow.com/a/30539355
            }, array_keys($return), $return);
        }, $raw);
    }
}
