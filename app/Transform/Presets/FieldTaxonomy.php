<?php

namespace App\Transform\Presets;

class FieldTaxonomy
{
    /**
     * Acf Field Taxonomy
     * 
     * Sanitise $raw data
     * 
     * @param $raw[...]
     * @return [...]
     */
    public static function get($raw) 
    {
        // map array and sanitise data
        return array_map(function ($term) {
            $data = (object) null;

            // ID
            $data->ID = $term->term_id;

            // title
            $data->title = $term->name;

            // editor
            $data->editor = $term->description;

            // image
            $data->image = get_field('term_image', 'term_' . $term->term_id);

            // link
            $data->link = get_term_link($term->term_id);

            return $data;
        }, $raw);
    }
}
