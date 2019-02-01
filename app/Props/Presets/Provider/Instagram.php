<?php

namespace App\Props\Presets\Provider;

/**
 * Provider Instagram
 * 
 * @todo composer require pgrimaud/instagram-user-feed ^5.0
 * @link https://github.com/pgrimaud/instagram-user-feed
 * 
 * @param string $user
 * @return array
 */
class Instagram
{
    protected $user;
    protected $raw;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function connection()
    {
        $uploads = (object) wp_get_upload_dir();
        $cache = new \Instagram\Storage\CacheManager("{$uploads->basedir}/cache/");
        $api = (new \Instagram\Api($cache))->setUserName($user);

        $this->raw = $api->getFeed();
    }

    public static function return($user) 
    {
        return array_map(function ($post) {
            $data = (object) null;
            $data->image = (object) null;

            // image
            // thumbnails[0] 150x150
            // thumbnails[1] 240x240
            // thumbnails[2] 320x320
            // thumbnails[3] 480x480
            // thumbnails[4] 640x640
            // displaySrc 1080x1080
            $data->image->placeholder = $post->thumbnails[1]->src;
            $data->image->src = $post->thumbnails[4]->src;
            $data->image->alt = $post->caption;
            $data->link = $post->link;

            // $data->title = $post->caption;
            // $data->title = wp_trim_words($post->caption, 10, '...' );

            return $data;
        }, $this->raw->medias);
    }
}
