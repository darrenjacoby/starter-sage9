{{--
  Builder: Taxonomy
--}}

@include('partials.comps.grid-bricks', [
  'props' => App\Transform\Presets\FieldTaxonomy::get($block->taxonomy),
])
