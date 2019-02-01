{{--
  Builder: Taxonomy
--}}
@include('partials.comps.grid-bricks', [
  'props' => (new App\Props\Presets\Acf\Taxonomy($block->taxonomy))->return(),
])
