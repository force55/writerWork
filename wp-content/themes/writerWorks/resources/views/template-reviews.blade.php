{{--
  Template Name: Reviews
--}}

@extends('layouts.app')

@section('content')
  <div class="container custom-page">
    <h1>{!! pll_e('Отзывы','sage') !!}</h1>

    <div class="slider-reviews">
      @foreach($comments_real as $comment)
      <div class="review">
        <div class="top-block">
          <img src="@asset('images/reviewth_char.png')" alt="">
          <img src="@asset('images/reviewth_char.png')" alt="">
        </div>
        <div class="content-block">
          <p class="name">{{$comment->name}}</p>
          <p class="date">{{$comment->date}}</p>
          <p class="content-review">
            {{$comment->content}}
          </p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="btn button-red p-3 "  data-toggle="modal" data-target="#modalReview">{!! pll_e('ДОБАВИТЬ ОТЗЫВ','sage') !!}</button>
    @include('partials.modal-review')
  </div>
  <div class="reviews_users ">
    <h3 class="text-center title_section">{!! pll_e('Фото отзывы','sage') !!}</h3>
    <div class="carousel slick-carousel photo-carousel">
      {{--      @php var_dump($reviews_photo); @endphp--}}
      @foreach($reviews_photo as $img)
        <div class="img-review">
          <div class="layer"></div>
          <img class="slick-img img-responsive" src="{{ $img->url }}" alt="{{ $img->name }}">
        </div>
      @endforeach
    </div>
  </div>
@endsection
