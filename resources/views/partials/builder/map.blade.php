{{--
  Builder: Map
--}}

@include('partials.comps.map', [
  // 'props' => App\Transform\Presets\FieldGoogleMap::get($block->google_map),
  'props' => App\Transform\Data::get([
      [
        'lat' => 0,
        'lng' => 0,
      ],
      [
        'lat' => 10,
        'lng' => 10,
      ],
  ]),

  // map related
  'config' => [
    'zoom' => 17,
    'styles' => '',
    'icon' => '',
  ],
])
