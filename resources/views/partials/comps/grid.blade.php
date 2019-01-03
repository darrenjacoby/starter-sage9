{{--
  Comp: Grid

  Fields:
    $title
    $content
    $image
    $link

  Config:
    $col
    $ratio
    $image-size
    $image-maxw
--}}

<div class="grid row">
  @foreach ($__fields as $item)
    <div class="{{ $__config->col or 'col-12 col-4:md' }}">
      <div class="grid-item">
        @if ($item->image)
          <a href="{{ $item->link }}">
            @if ($item->link)
              <div class="img-mask {{ $__config->ratio or 'ratio-1-1' }}">
                <img {{ App\image($item->image, 'large') }}>
              </div>
            @endif
          </a>
        @endif

        @if ($item->title)
          <div class="grid-item-title">
            {{ $item->title }}
          </div>
        @endif

        @if ($item->content)
          <div class="grid-item-content">
            {!! $item->content !!}
          </div>
        @endif
      </div>
    </div>
  @endforeach
</div>
