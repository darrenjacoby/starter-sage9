<?php

namespace App\Props\Presets\Acf;

/**
 * Presets\Acf\GoogleMap
 * 
 * @param array $raw
 * @return array
 */
class GoogleMap
{
    protected $raw;

    public function __construct($raw) 
    {
        $this->raw = $raw;
    }

    public function return()
    {
        return [$this->raw];
    }
}
