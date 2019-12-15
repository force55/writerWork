{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
<div class="container custom-page mb-5 contactUs-page">
  <h1>{!! pll_e('Контакты','sage') !!}</h1>
  <div class="row">
    <div class="col-md-6">
      <div style="width: 100%;height: 100%">
        {!! the_field('map','options') !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="contacts py-3">
        @php
          if( have_rows('addresses','options') ):

            echo '<div class="phones values">';
            echo '<img src="'.get_template_directory_uri().'/assets/images/home-address.png">';
            echo '<ul>';

             // loop through the rows of data
              while ( have_rows('addresses','options') ) : the_row();

                  // display a sub field value
                 echo "<li>".get_sub_field('address')."</li>";

              endwhile;
              echo '</ul></div>';
          endif;


          if( have_rows('phones_repeater','options') ):

            echo '<div class="phones values">';
            echo '<img src="'.get_template_directory_uri().'/assets/images/phone-book.png">';
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
            echo '<img src="'.get_template_directory_uri().'/assets/images/Group_381.png">';
            echo '<ul>';

             // loop through the rows of data
              while ( have_rows('emails','options') ) : the_row();

                  // display a sub field value
                 echo "<li>".get_sub_field('email')."</li>";

              endwhile;
              echo '</ul></div>';
          endif;


        @endphp
        <div class="social-block d-flex flex-column">
          <a href='{!! the_field('инстаграм_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_instagran.png' alt='1'>writer_works_for_students</a>
          <a href='{!! the_field('телеграм_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_telegram.png ' alt='3'>050 374 16 24</a>
          <a href='{!! the_field('viber_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_viber.png' alt='2'>050 374 16 24</a>
        </div>
        <button class="btn button button-red button-left mt-4 mb-0">СДЕЛАТЬ ЗАКАЗ</button>
      </div>
    </div>
  </div>
</div>
@endsection
