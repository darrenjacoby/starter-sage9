<?php

namespace App\Controllers\Fields\Presets;

class Relationship
{
    /**
     * Field Preset Relationship
     * 
     * Sanitise $raw data
     * 
     * @param $raw[]
     * @return [$ID, $title, $content, $link, $image]
     */
    public static function get($raw) {
        // map array and sanitise data
        return array_map(function ($post) {
            // collection
            $data = (object) null;

            // $ID
            $data->ID = $post->ID;
            // $title
            $data->title = $post->post_title;
            // $content
            $data->content = $post->excerpt;
            // image
            $data->image = get_post_thumbnail_id($post->ID);
            // $link
            $data->link = get_the_permalink($post->ID);

            // return
            return $data;
        }, $raw);
    }
}
