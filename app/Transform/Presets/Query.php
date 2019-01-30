<?php

namespace App\Transform\Presets;

class Query
{
    /**
     * Query
     * 
     * Sanitise wp_query->posts
     * 
     * @param $args[...]
     * @return [...]
     */
    public static function get($args = false) 
    {
        global $wp_query;

        $raw = ($args ? get_posts($args) : $wp_query->posts);

        // map array and sanitise data
        return array_map(function ($post) {
            $data = (object) null;

            // ID
            $data->ID = $post->ID;

            // title
            $data->title = $post->post_title;

            // editor
            $data->editor = $post->post_excerpt;

            // image
            $data->image = get_post_thumbnail_id($post->ID);

            // link
            $data->link = get_the_permalink($post->ID);

            return $data;
        }, $raw);
    }
}
