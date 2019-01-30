<?php
// https://github.com/pgrimaud/instagram-user-feed
// composer require pgrimaud/instagram-user-feed ^5.0

namespace App\Transform\Presets;

class FieldInstagram
{
    /**
     * Group Instagram
     * 
     * Sanitise $raw data
     * 
     * @param $raw[...]
     * @return [...]
     */
    public static function get($user) 
    {
        // get upload path for cache
        $uploads = (object) wp_get_upload_dir();
        // set cache 
        $cache = new \Instagram\Storage\CacheManager("{$uploads->basedir}/cache/");
        // create api
        $api = new \Instagram\Api($cache);
        // set instagram user
        $api->setUserName($user);
        // get user feed
        $raw = $api->getFeed();
        // limit the amount of feed media
        // $raw = array_slice($feed->medias, 0, $limit);

        // map array and sanitise data
        return array_map(function ($post) {
            $data = (object) null;

            // title
            // $data->title = $post->caption;
            // $data->title = wp_trim_words($post->caption, 10, '...' );

            // link
            $data->link = $post->link;

            // image
            // https://github.com/pgrimaud/instagram-user-feed#usage-of-version-50
            // $post->thumbnails[0] 150x150
            // $post->thumbnails[1] 240x240
            // $post->thumbnails[2] 320x320
            // $post->thumbnails[3] 480x480
            // $post->thumbnails[4] 640x640
            // $post->displaySrc 1080x1080
            // $post->thumbnailSrc 640x640
            $data->image = (object) null;
            $data->image->placeholder = $post->thumbnails[1]->src;
            $data->image->src = $post->thumbnails[4]->src;
            $data->image->alt = $post->caption;

            return $data;
        }, $raw->medias);
    }
}
