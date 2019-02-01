{{--
  Builder: Gallery
--}}
@include('partials.comps.carousel', [
  'props' => (new App\Props\Presets\Acf\Gallery($block->gallery))->return(),
])
