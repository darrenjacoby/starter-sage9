{{--
  Builder: Relationship
--}}

@include('partials.comps.grid', [
  '__fields' => App\Controllers\Builder\Fields\Relationship::get($block->relationship),
])
