<?php

namespace App\Transform\Presets;

class FieldGallery
{
    /**
     * Acf Field Gallery
     * 
     * Sanitise $raw data
     * 
     * @param $raw[...]
     * @return [...]
     */
    public static function get($raw) 
    {
        // map array and sanitise data
        return array_map(function ($attachment) {
            $data = (object) null;

            // ID
            $data->ID = $attachment->ID;

            // title
            $data->title = $attachment->title;

            // editor
            $data->editor = $attachment->caption;

            // image
            $data->image = $attachment->ID;

            return $data;
        }, $raw);
    }
}
