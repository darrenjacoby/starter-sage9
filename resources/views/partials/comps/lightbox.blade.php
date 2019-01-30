{{--
  
  Lightbox

  @include('partials.comps.grid', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'image' => '',
      // for collections
      'images' => '',
    ]),

    // https://github.com/ahmednooor/halkaBox.js/
    'config' => [
      'group' => 'default',
      // playback
      'animation' => 'slide', // fade
      // interaction
      'hideButtons' => true, // for touch
      'swipeDownToClose' => false,
      'nextPrevOnWheel' => false,
      'isZoomable' => true,
      // perf
      'preload' => 2,
    ]),
  ]);
--}}

@foreach ($props as $item)
  @if ($item->image)
    <a 
      class="js-lightbox"
      data-group="{{ $config['group'] ?: 'default' }}"
      href="{{ App\get_image_src($item->image, '100vw') }}"
      title="{!! $item->title ?: $item->title !!}">
      {{-- {!! $item->title !!} --}}
      {{-- <img {{ App\image($item->image, 'large', 600) }}> --}}
    </a>
  @endif
@endforeach

{{-- to toggle collections --}}
{{--
@foreach ($props as $item)
  <div 
    class="js-lightbox-toggle"
    data-group="{{ $config->group ?: 'default' }}">
    {!! $item->title !!}
  </div>

  @if ($item->images) 
    <div class="none">
      @foreach ($item->images as $image)
        <a 
          class="js-lightbox"
          data-group="{{ $config->group ?: 'default' }}"
          href="{{ App\get_image_src($item->image, '100vw') }}"
          title="{!! $item->title ?: $item->title !!}">
        </a>
      @endforeach
    </div>
  @endif
@endforeach
--}}
