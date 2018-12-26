<?php

namespace App;

/**
* Add image size
* @link https://developer.wordpress.org/reference/functions/add_image_size/
*/

// low quality img for placeholders
add_image_size('placeholder', 100, 9999);

// vw sizes
add_image_size('100vw', 1800, 9999);
add_image_size('100vw@2x', 3600, 9999);

add_image_size('66vw', 1200, 9999);
add_image_size('66vw@2x', 2400, 9999);

// based on 1400px (xx) container
add_image_size('3of12', 350, 9999);
add_image_size('3of12@2x', 700, 9999);

add_image_size('4/12', 460, 9999);
add_image_size('4/12@2x', 920, 9999);

add_image_size('6/12', 700, 9999);
add_image_size('6/12@2x', 1400, 9999);

add_image_size('9/12', 1050, 9999);
add_image_size('9/12@2x', 2100, 9999);

add_image_size('12/12', 1400, 9999);
add_image_size('12/12@2x', 2800, 9999);

// based on 1600px (xxx) container
/*
add_image_size('3of12', 400, 9999);
add_image_size('3of12@2x', 800, 9999);

add_image_size('4/12', 600, 9999);
add_image_size('4/12@2x', 1200, 9999);

add_image_size('6/12', 800, 9999);
add_image_size('6/12@2x', 1600, 9999);

add_image_size('9/12', 1200, 9999);
add_image_size('9/12@2x', 2400, 9999);

add_image_size('12/12', 1600, 9999);
add_image_size('12/12@2x', 3200, 9999);
*/

// based on 1200px (xl) container
/*
add_image_size('3of12', 300, 9999);
add_image_size('3of12@2x', 600, 9999);

add_image_size('4/12', 400, 9999);
add_image_size('4/12@2x', 800, 9999);

add_image_size('6/12', 600, 9999);
add_image_size('6/12@2x', 1200, 9999);

add_image_size('9/12', 800, 9999);
add_image_size('9/12@2x', 1600, 9999);

add_image_size('12/12', 1200, 9999);
add_image_size('12/12@2x', 2400, 9999);
*/
