{{--
  Template Name:Front page
--}}

@extends('layouts.app')

@section('content')
  <div class="banner-home" style="background-image: url('@php the_field('banner_home_bg',$post) @endphp')">
    <div class="container">
      <div class="row">
        <div class="col-md-7 offset-md-1">
          <h1>@php the_field('title_banner_home',$post) @endphp</h1>
          <button class="btn button">@php the_field('text_in_button_front_page',$post) @endphp</button>
        </div>
        <div class="col-md-4">
          <div class="content-block">
            @php
              if( have_rows('phones_repeater','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/phones_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('phones_repeater','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('value')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            if( have_rows('emails','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/email_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('emails','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('email')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            if( have_rows('addresses','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/address_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('addresses','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('address')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="uslugi container">
    <h3>{!! pll_e('Топ услуги','sage') !!}</h3>
    <div class="contents col-md-9 mx-auto">
        <div class="row">
          @foreach ($uslugi_home as $usluga)

          <div class="usluga">
            <div class="img-block">
              <img src="{!! $usluga->img !!}" alt="{!! $usluga->title !!}">
            </div>
            <div class="content-block">
              <p class="title">{!! $usluga->title !!}</p>
              <p class="price">{!! $usluga->price !!}</p>
              <div class="buttons_block">
                <button class="btn order">@php _e('Заказать'); @endphp</button>
                <button class="btn view">
                  <a href="{!! $usluga->link !!}">
                    <img src="@asset('images/eye.png')" alt="oko">
                  </a>
                </button>
              </div>
            </div>
          </div>

          @endforeach
        </div>
      <button class="btn review-all"><a href="{{ $link_to_archive_page }}">{!! the_field('text_button_home_uslugiLayer',$post) !!}</a></button>
    </div>
  </div>
  <div class="zaboti_studentov">
    <div class="first-block f-b" style="background-image: url(@asset('images/bg_third_section.png'));">
      <div class="container">
        <div class="row">
          <div class="col ">
            <p class="title text">{!! the_field('text_left_column_third_section',$post) !!}</p>
          </div>
          <div class="col offset-2">
            <p class="text">{!! the_field('text_right_column_third_section',$post) !!}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="second-block f-b" style="background-image: url(@asset('images/bg_third_section_two.png'));">
      <div class="container">
        <h3 class="text-center">{!! the_field('title_second_block_third_section',$post) !!}</h3>
        <div class="row">
          @foreach($how_we_works as $block)
          <div class="col">
            <p class="title">{{ $block->title }}</p>
            <p class="description">{{ $block->description }}</p>
          </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="why_us">
    <div class="container">
      <h3 class="text-center title_section">{!! pll_e('Почему нас выбирают') !!}</h3>
      <div class="mx-auto">
        <div class="row">
          @foreach($why_us as $block)
            <div class="block">
          <div class="img-block">
            <img src="{!! $block->img !!}" alt="{!! $block->title !!}">
          </div>
          <div class="content">
            <p class="title-block">{!! $block->title !!}</p>
            <p class="description">{!! $block->description !!}</p>
          </div>
        </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="whate_we_gift" style="background-image: url('{!! the_field("bg_fifth_section",$post) !!}')">
    <div class="container">
      <h3 class="text-center title_section">{!! pll_e('Почему нас выбирают') !!}</h3>
      <div class="mx-auto">
        <div class="row">
          @foreach($what_me_gift as $block)
            <div class="block no-bg">
              <div class="img-block">
                <img src="{!! $block->img !!}" alt="{!! $block->title !!}">
              </div>
              <div class="content">
                <p class="title-block">{!! $block->title !!}</p>
                <p class="description">{!! $block->description !!}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="gift-section" style="background-image: url('{!! the_field("bg_sixth_section",$post) !!}')">
    <div class="container">
      <div class="row">
        <div class="img-gift">
          <img src="@asset('images/gift.png')" alt="gift">
        </div>
        <div class="text-block">
          <p class="text_sixth_section">{!! the_field('fisrt_row_text',$post) !!}</p>
          <p class="text_sixth_section white">{!! the_field('second_row_text',$post) !!}</p>
        </div>
        <div class="button-block">
          <button class="btn button">
            {!! the_field('text_button_sixth_section',$post) !!}
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews_users ">
    <h3 class="text-center title_section">Отзывы клиентов</h3>
    <div class="carousel slick-carousel">
     @foreach($reviews_home as $img)
       <div class="img-review">
         <div class="layer"></div>
         <img class="slick-img img-responsive" src="{{ $img->url }}" alt="{{ $img->name }}">
       </div>
     @endforeach
    </div>
    <button class="btn button">СМОТРЕТЬ ВСЕ ОТЗЫВЫ</button>
  </div>
  <div class="nav_doveraut" style="background-image: url({!! the_field('bg_eight_section_home',$post) !!}); )">
    <h3 class="title_section text-center">Нам доверяют</h3>
    <div class="uneversitets_blocks">
      <div class="container">
        <div class="row">
        @foreach($universitets_home as $univer)
        <div class="col-lg-3 col-md-6 col-12">
          <div class="universitet">
            <div class="img-block text-center">
              <img src="{{ $univer->img }}" alt="">
            </div>
            <div class="content-block">
              <p class="description text-center">
                {{ $univer->description }}
              </p>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="order_now">
    <button class="order_now_button" data-toggle="modal" data-target="#orderModal">
      @php
      $text_btn_order_now = 'заказать сейчас';
      $text_btn_order_now = str_split_unicode($text_btn_order_now);

      foreach ($text_btn_order_now as $char):
        if ($char == ' '){
          $char = '&nbsp;';
        }
        echo "<p class='char'>$char</p>";
      endforeach;
      @endphp

      <img src="@asset('images/img_order_now.png')" alt="">
    </button>
  </div>
  @include('partials.modal-order')
@endsection
