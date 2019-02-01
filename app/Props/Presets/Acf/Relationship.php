<?php

namespace App\Props\Presets\Acf;

/**
 * Presets\Acf\Relationship
 * 
 * @param array $raw
 * @return array
 */
class Relationship
{
    protected $raw;

    public function __construct($raw) 
    {
        $this->raw = $raw;
    }

    public function return()
    {
        return array_map(function ($post) {
            $data = (object) null;

            $data->ID = $post->ID;
            $data->title = $post->post_title;
            $data->editor = $post->excerpt;
            $data->image = get_post_thumbnail_id($post->ID);
            $data->link = get_the_permalink($post->ID);

            return $data;
        }, $this->raw);
    }
}
