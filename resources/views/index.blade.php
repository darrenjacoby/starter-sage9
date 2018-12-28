@extends('layouts.app')

@section('content')
  @include('partials.title')

  {{--
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  --}}

  @while (have_posts()) @php the_post() @endphp
    {{-- builder --}}
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
