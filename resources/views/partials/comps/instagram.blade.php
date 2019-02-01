{{--

  Instagram

  @include('partials.comps.instagram', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'image' => '',
      'link' => '',
    ]),

    'config' => [
      'limit' => '6',
    ]),
  ]);
--}}

<div class="container">
  <div class="instagram row">
    @foreach (array_slice($props, 0, $config['limit'] ?? 6) as $item){{-- limit --}}
      <div class="col-12 md:col-4">{{-- col --}}
        <article class="grid-item">

          {{-- img --}}
          @if ($item->image)
            <a 
              href="{{ $item->link }}"
              target="_blank">
              @if ($item->link)
                <figure class="img-mask ratio-1-1">{{-- img ratio --}}
                  <img 
                    src="{{ $item->image->placeholder }}" 
                    data-src="{{ $item->image->src }}" 
                    alt="{{ $item->image->alt }}">
                </figure>
              @endif
            </a>
          @endif

          {{-- meta --}}
          @if ($item->title)
            <header class="grid-item-main {{-- grid-item-in --}}">
              <div class="grid-item-title">
                {!! $item->title !!}
              </div>
            </header>
          @endif
        </article>
      </div>{{-- /.col-x --}}
    @endforeach
  </div>{{-- /.grid --}}
</div>{{-- /.container --}}
