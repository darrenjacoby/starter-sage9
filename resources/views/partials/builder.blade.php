@if ($builder)
  <div class="builder">
    @foreach ($builder as $block)
      <section class="builder-block-{{ $loop->iteration }} builder-block-{{ $block->acf_fc_layout }}">
        @include('partials.builder.' . $block->acf_fc_layout)
      </section>
    @endforeach
  </div>
@endif
