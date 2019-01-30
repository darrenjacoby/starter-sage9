<div 
  class="map js-map"
  data-json=@json($config)>
  @foreach ($props as $item)
    <div 
      class="map-marker js-map-marker" 
      data-lat="{{ $item->lat }}" 
      data-lng="{{ $item->lng }}">
    </div>
  @endforeach
</div>
