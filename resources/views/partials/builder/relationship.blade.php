{{--
  Builder: Relationship
--}}

@include('partials.comps.grid', [
  'props' => App\Transform\Presets\FieldRelationship::get($block->relationship),
])
