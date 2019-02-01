<?php

namespace App\Props\Presets;

/**
 * Presets\Query
 * 
 * @param optional array $args
 * @return array
 */
class Query
{
    protected $raw;

    public function __construct($args = false) 
    {
        global $wp_query;

        $this->raw = ($args ? get_posts($args) : $wp_query->posts);
    }

    public function return()
    {
        return array_map(function ($post) {
            $data = (object) null;

            $data->ID = $post->ID;
            $data->title = $post->post_title;
            $data->editor = $post->post_excerpt;
            $data->image = get_post_thumbnail_id($post->ID);
            $data->link = get_the_permalink($post->ID);

            return $data;
        }, $this->raw);
    }
}
