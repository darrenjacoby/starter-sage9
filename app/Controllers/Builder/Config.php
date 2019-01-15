<?php

namespace App\Controllers\Builder;

class Config
{
    /**
     * Field
     * 
     * Sanitise $raw data
     * 
     * @param $raw[], $return[]
     * @return [...]
     */
    public static function get($raw) 
    {
        // make sure $raw is an arr
        if (!is_array($raw)) {
            $raw = [$raw];
        }

        // convert true and false to string else data- converts to 0 or 1
        $data = array_map(function ($item) {
          if (is_bool($item)) {
            return $item ? 'true' : 'false';
          }
          return $item;
        }, $raw);

        // convert multidimensional array to object
        // https://stackoverflow.com/questions/9169892/how-to-convert-multidimensional-array-to-object-in-php
        return json_decode(json_encode($data));
    }
}
