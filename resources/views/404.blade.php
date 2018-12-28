@extends('layouts.app')

@section('content')
  @include('partials.title')

  {{--
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  --}}
@endsection
