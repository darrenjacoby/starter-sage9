<?php

namespace App\Props\Presets\Acf;

/**
 * Presets\Acf\Taxonomy
 * 
 * @param array $raw
 * @return array
 */
class Taxonomy
{
    protected $raw;

    public function __construct($raw) 
    {
        $this->raw = $raw;
    }

    public function return()
    {
        return array_map(function ($term) {
            $data = (object) null;

            $data->ID = $term->term_id;
            $data->title = $term->name;
            $data->editor = $term->description;
            $data->image = get_field('term_image', 'term_' . $term->term_id);
            $data->link = get_term_link($term->term_id);

            return $data;
        }, $this->raw);
    }
}
