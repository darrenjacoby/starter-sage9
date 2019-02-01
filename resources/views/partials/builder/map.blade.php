{{--
  Builder: Map
--}}

{{--
'props' => (new App\Props\Presets\Acf\GoogleMap($block->google_map))->return(),
--}}

@include('partials.comps.map', [
  'props' => (new App\Props\Props([
    ['lat' => 0, 'lng' => 0],
    ['lat' => 10, 'lng' => 10],
  ]))->return(),

  'config' => [
    'zoom' => 17,
    'styles' => '',
    'icon' => '',
  ],
])
