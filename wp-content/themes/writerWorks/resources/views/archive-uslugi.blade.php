
@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{!! pll_e('Услуги','sage') !!}</h1>
  </div>
    @foreach($posts as $cat)
      <div class="one_cat  {{ $cat['class'] }}" style="background-image: url({{ $cat['img_bg'] }})">
        <h3 class="title_cat">{{ $cat['title'] }}</h3>
          <div class="container">
          <div class="row">
          @foreach($cat['posts'] as $post_cat)
            <div class="col-md-3">
              <div class="usluga">
                <div class="img-block">
                  <img src="{!! $post_cat->img !!}" alt="{!! $post_cat->title !!}">
                </div>
                <div class="content-block">
                  <p class="title">{!! $post_cat->title !!}</p>
                  <p class="price">{!! $post_cat->price !!}</p>
                  <div class="buttons_block">
                    <button class="btn order">@php _e('Заказать'); @endphp</button>
                    <button class="btn view">
                      <a href="{!! $post_cat->link !!}">
                        <img src="@asset('images/eye.png')" alt="oko">
                      </a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    @endforeach
@endsection
