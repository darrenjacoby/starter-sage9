<div class="container">
  <div class="banner-flex">
    <div class="banner-logo">
      <a class="brand" href="{{ home_url('/') }}">
        {{ __('Logo') }}
        {{-- get_svg('images/logo.svg') --}}
      </a>
    </div>

    <div 
      class="banner-toggle lg:none js-drawer"
      aria-label="Menu">
      {{ __('Menu') }}
      {{-- get_svg('images/icon-nav.svg') --}}
    </div>

    <nav class="nav-primary none lg:none">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'banner-nav']) !!}
      @endif
    </nav>
  </div>
</div>

{{-- centered logo --}} 
{{--
<div class="banner-flex">
  <div class="flex-1"></div>
  <div class="banner-logo"></div>
  <div class="flex-1"></div>
</div>
--}}

{{-- centered nav --}}
{{--
<div class="banner-flex">
  <div class="banner-logo"></div>
  <nav class="nav-primary none lg:block"></nav>
  <div class="banner-logo"></div>
</div>
--}}
