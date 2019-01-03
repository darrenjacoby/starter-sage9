{{--
  Builder: Gallery
--}}

@include('partials.comps.carousel', [
  '__fields' => App\Controllers\Fields\Presets\Gallery::get($block->gallery),
])
