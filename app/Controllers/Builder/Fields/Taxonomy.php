<?php

namespace App\Controllers\Builder\Fields;

class Taxonomy
{
    /**
     * Field Preset Taxonomy
     * 
     * Sanitise $raw data
     * 
     * @param $raw[]
     * @return [$ID, $title, $content, $link, $image]
     */
    public static function get($raw) 
    {
        // map array and sanitise data
        return array_map(function ($term) {
            // collection
            $data = (object) null;

            // $ID
            $data->ID = $term->term_id;
            // $title
            $data->title = $term->name;
            // $content
            $data->content = $term->description;
            // image
            $data->image = get_field('term_image', 'term_' . $term->term_id);
            // $link
            $data->link = get_term_link($term->term_id);

            // return
            return $data;
        }, $raw);
    }
}
