<?php

namespace App\Transform\Presets;

class FieldGoogleMap
{
    /**
     * Acf Field Google Map
     * 
     * Sanitise $raw data
     * 
     * @param $raw[...]
     * @return [...]
     */
    public static function get($raw) 
    {
        // $raw = [$raw];

        // map array and sanitise data
        /*
        return array_map(function ($map) {
            $data = (object) null;

            $data->lat = $map->lat;
            $data->lng = $map->lng;

            return $data;
        }, $raw);
        */

        return [$raw];
    }
}
