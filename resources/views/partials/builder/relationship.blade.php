{{--
  Builder: Relationship
--}}

@include('partials.comps.grid', [
  'props' => (new App\Props\Presets\Acf\Relationship($block->relationship))->return(),
])
