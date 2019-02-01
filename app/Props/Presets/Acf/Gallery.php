<?php

namespace App\Props\Presets\Acf;

/**
 * Presets\Acf\Gallery
 * 
 * @param array $raw
 * @return array
 */
class Gallery
{
    protected $raw;

    public function __construct($raw) 
    {
        $this->raw = $raw;
    }

    public function return()
    {
        return array_map(function ($attachment) {
            $data = (object) null;

            $data->ID = $attachment->ID;
            $data->title = $attachment->title;
            $data->editor = $attachment->caption;
            $data->image = $attachment->ID;

            return $data;
        }, $this->raw);
    }
}
