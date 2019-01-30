<?php

namespace App\Transform;

class Data
{
    /**
     * Get
     * 
     * Sanitise $raw data
     * 
     * @param $raw[...], $return[...]
     * @return [...]
     */
    public static function get($raw, $return = false) 
    {
        // make sure $raw is an arr
        if (!is_array($raw)) {
            $raw = [$raw];
        }

        // maps $return keys to $raw data
        if ($return) {
            $raw = array_map(function ($item) use ($return) {
                // map through $return
                return array_map(function ($key, $val) use ($item) {
                    // match $return keys to $item->val from $raw
                    return [
                        $key => $item->$val,
                    ];
                // https://stackoverflow.com/a/30539355
                }, array_keys($return), $return);
            }, $raw);
        }

        // convert multidimensional array to object
        // https://stackoverflow.com/questions/9169892/how-to-convert-multidimensional-array-to-object-in-php
        return json_decode(json_encode($raw));
    }
}
