{{--
  Comp: Hero

  Fields:
    $title
    $content
    $image
    $link
--}}

@foreach ($__fields as $item)
  <div class="container-esc-l">
    <div class="flex flex-wrap justify-content-between align-items-center">
      {{-- image --}}
      <div class="col-12 col-7:md col-8:lg">
        @if ($item->image)
          <div class="img-mask ratio-2-1">
            <div class="rellax-mask">
              <img 
                data-rellax 
                {{ App\image($item->image, '66vw', 1000) }}>
            </div>
          </div>
        @endif
      </div>

      <div class="col-12 col-5:md col-3:lg">
        <div class="hero-main">
          @if ($item->title)
            <div class="hero-title">
              {!! $item->title !!}
            </div>
          @endif

          @if ($item->content)
            <div class="hero-content">
              {!! $item->content !!}
            </div>
          @endif

          @if ($item->link)
            <div class="carousel-link">
              <a href="{{ $item->link }}">&xrarr;</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endforeach
