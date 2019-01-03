{{--
  Comp: Carousel

  Fields:
    $title
    $content
    $image
    $link
--}}

{{--
<div class="container-esc">
--}}
<div class="carousel tns js-tns">
  @foreach ($__fields as $item)
    <div class="carousel-item">
      <div class="ratio-2-1 img-mask">
        <img 
          class="tns-lazy-img" 
          {{ image($item->image, '100vw') }}>

        <div class="pseudo-cover flex align-items-end justify-content-start">{{-- container --}}
          <div class="carousel-contain">
            @if ($item->title)
              <div class="carousel-title">
                {!! $item->title !!}
              </div>
            @endif

            @if ($item->content)
              <div class="carousel-content">
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
</div>
{{--
</div>
--}}
