{{--
  Builder: Relationship
--}}

@include('partials.comps.grid', [
  '__fields' => App\Controllers\Fields\Presets\Relationship::get($block->relationship),
])
