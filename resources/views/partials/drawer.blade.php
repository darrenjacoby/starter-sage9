<div class="drawer">
  <div class="drawer-toggle js-drawer">
    {{ __('Esc') }}
  </div>

  {{--
  <div class="drawer-head">
    <div class="drawer-head-menu">
      {{ __('Menu') }}
    </div>
    <div class="drawer-toggle js-drawer">
      {{ __('Esc') }}
    </div>
  </div>
  --}}

  <div class="drawer-main">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'drawer-nav']) !!}
      @endif
    </nav>
  </div>
</div>

<div class="drawer-bg js-drawer"></div>
