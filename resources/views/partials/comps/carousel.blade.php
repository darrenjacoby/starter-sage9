{{--

  Carousel

  @include('partials.comps.carousel', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'editor' => '',
      'image' => '',
      'link' => '',
    ]),

    // https://github.com/ganlanyuan/tiny-slider#options
    'config' => [
      // layout
      'items' => 1, 
      'gutter' => 0,
      'edgePadding' => 0,
      // playback
      'mode' => 'carousel', // gallery for fade
      'speed' => 400,
      'autoplay' => false,
      'loop' => false,
      'rewind' => false,
      'axis' => 'horizontal',
      // interaction
      'controls' => true,
      'nav' => true,
      'touch' => true,
      'arrowKeys' => true,
      // perf
      'lazyload' => true,
    ])
  ]);
--}}

<div class="carousel {{-- container-esc --}}">
  <div 
    class="js-tns" 
    data-json=@json($config)>
    @foreach ($props as $item)
      <article class="carousel-item">
        {{-- img --}}
        <div class="img-mask ratio-2-1">{{-- img ratio --}}
          <img 
            class="tns-lazy-img" 
            {{ App\image($item->image, '100vw', 1800) }}>{{-- img size/max-w --}}
        </div>

        {{-- meta --}}
        {{-- remove class below to move header below img --}}
        <div class="pseudo-cover flex align-items-end justify-content-left">
          <header class="carousel-item-main">
            @if ($item->title)
              <div class="carousel-item-title">
                {!! $item->title !!}
              </div>
            @endif
            @if ($item->editor)
              <div class="carousel-item-content">
                {!! $item->editor !!}
              </div>
            @endif
            @if ($item->link)
              <div class="carousel-item-link">
                <a href="{{ $item->link }}">&xrarr;</a>
              </div>
            @endif
          </header>
        </div>{{-- /.pseudo-cover --}}
      </article>
    @endforeach
  </div>{{-- /.tns --}}
</div>{{-- /.carousel --}}
