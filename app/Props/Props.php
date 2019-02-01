<?php

namespace App\Props;

/**
 * Props
 * 
 * @param array $raw
 * @param array $return
 * 
 * @return array
 */
class Props
{
    protected $raw;
    protected $return;

    public function __construct($raw, $return = false) 
    {
        $this->raw = is_array($raw) ? $raw : [$raw];

        $this->return = $return;
    }

    public function return() 
    {
        // maps $return keys to $raw data
        if ($this->return) {
            $return = $this->return;
            $this->raw = array_map(function ($item) use ($return) {
                // map through $return
                return array_map(function ($k, $v) use ($item) {
                    // match $return keys to $item->v from $raw
                    return [
                        $k => $item->$v,
                    ];
                // https://stackoverflow.com/a/30539355
                }, array_keys($this->return), $this->return);
            }, $this->raw);
        }

        // convert multidimensional array to object
        // https://stackoverflow.com/questions/9169892/how-to-convert-multidimensional-array-to-object-in-php
        return json_decode(json_encode($this->raw));
    }
}
