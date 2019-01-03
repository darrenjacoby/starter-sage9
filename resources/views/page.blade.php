@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.title')
    @include('partials.builder')
  @endwhile
@endsection
