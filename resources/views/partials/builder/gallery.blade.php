{{--
  Builder: Gallery
--}}
@include('partials.comps.carousel', [
  '__fields' => App\Controllers\Builder\Fields\Gallery::get($block->gallery),
  '__config' => App\Controllers\Builder\Config::get([
    // tns
    // https://github.com/ganlanyuan/tiny-slider#options
    'mode' => 'carousel',
  ])
])
