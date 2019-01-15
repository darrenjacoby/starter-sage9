<?php

namespace App\Controllers\Builder\Fields;

class Gallery
{
    /**
     * Field Preset Gallery
     * 
     * Sanitise $raw data
     * 
     * @param $raw[]
     * @return [$ID, $title, $content, $link, $image]
     */
    public static function get($raw) 
    {
        // map array and sanitise data
        return array_map(function ($attachment) {
            // collection
            $data = (object) null;

            // $ID
            $data->ID = $attachment->ID;
            // $title
            $data->title = $attachment->title;
            // $content
            $data->content = $attachment->caption;
            // image
            $data->image = $attachment->ID;
            // $link
            // $data->link;

            // return
            return $data;
        }, $raw);
    }
}
