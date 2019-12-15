
{{--
  Template Name:About us
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  <p class="test">13cvbncbv</p>123
  @include('partials.content-page')
  @endwhile
@endsection
