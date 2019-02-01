{{--

  Hero Inline

  @include('partials.comps.hero-inline', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'editor' => '',
      'image' => '',
      'link' => '',
    ]),
  ]);
--}}

<div class="hero {{-- container-esc-l --}}">
  @foreach ($props as $item)
    <div class="flex justify-content-between {{-- align-items-center --}}">

      {{-- img --}}
      <div class="col-12 md:col-7 lg:col-8">{{-- col --}}
        @if ($item->image)
          <div class="img-mask ratio-2-1">{{-- img ratio --}}
            <div class="rellax-mask">
              <img 
                data-rellax 
                {{ App\image($item->image, '66vw', 1000) }}>{{-- img size/max-w --}}
            </div>
          </div>
        @endif
      </div>{{-- /.col-x --}}

      {{-- meta --}}
      <div class="col-12 md:col-5 lg:col-3">{{-- col --}}
        <div class="hero-main">
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
        </div>{{-- /.hero-main --}}
      </div>{{-- /.col-x --}}
    </div>{{-- /.flex --}}
  @endforeach
</div>{{-- /.hero--}}