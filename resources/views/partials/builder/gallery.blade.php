{{--
  Builder: Gallery
--}}

@include('partials.comps.carousel', [
  'props' => App\Transform\Presets\FieldGallery::get($block->gallery),
  
  // https://github.com/ganlanyuan/tiny-slider#options
  'config' => [
    // layout
    // 'items' => 1, 
    // 'gutter' => 0,
    // 'edgePadding' => 0,

    // playback
    'mode' => 'carousel', // gallery for fade
    // 'speed' => 400,
    // 'autoplay' => false,
    // 'loop' => false,
    // 'rewind' => false,
    // 'axis' => 'horizontal',

    // interaction
    // 'controls' => true,
    // 'nav' => true,
    // 'touch' => true,
    // 'arrowKeys' => true,

    // perf
    // 'lazyload' => true,
  ],
])
