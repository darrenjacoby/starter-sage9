{{--
  Builder: Taxonomy
--}}

@include('partials.comps.grid', [
  '__fields' => App\Controllers\Fields\Presets\Taxonomy::get($block->taxonomy),
  '__config' => (object) [
    'col' => 'col-12 col-4:md',
    'ratio' => 'ratio-1-1',
  ],
])