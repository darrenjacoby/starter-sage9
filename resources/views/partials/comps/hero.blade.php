{{--

  Hero

  @include('partials.comps.hero', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'editor' => '',
      'image' => '',
      'link' => '',
    ]),
  ]);
--}}

<div class="hero container-esc">
  @foreach ($props as $item)
    {{-- for min height, remove class comments below --}}
    <article class="hero-item {{-- ratio-2-1 --}} {{-- minh-100vh --}}">
      <div class="flex {{-- align-items-center --}} {{-- pseudo-cover --}}">

        {{-- img --}}
        @if ($item->image)
          <figure class="img-mask pseudo-cover">
            <div class="rellax-mask">
              <img 
                data-rellax 
                {{ App\image($item->image, '100vw', 1800) }}>{{-- img size/max-w --}}
            </div>
          </figure>
        @endif

        {{-- meta --}}
        <div class="container">
          <div class="row {{-- justify-content-center --}}">
            <div class="col-12 md:col-6">{{-- col --}}
              <header class="hero-main">
                @if ($item->title)
                  <div class="hero-title">
                    {!! $item->title !!}
                  </div>
                @endif

                @if ($item->editor)
                  <div class="hero-editor">
                    {!! $item->editor !!}
                  </div>
                @endif

                @if ($item->link)
                  <div class="hero-link">
                    <a href="{{ $item->link }}">&xrarr;</a>
                  </div>
                @endif
              </header>
            </div>{{-- /.col-x --}}
          </div>{{-- /.row --}}
        </div>{{-- /.container --}}
      </div>{{-- /.flex --}}
    </article>
  @endforeach
</div>{{-- /.hero --}}
