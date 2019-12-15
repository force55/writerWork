<footer class="content-info footer_site">
  <div class="container">
{{--    @php dynamic_sidebar('sidebar-footer') @endphp--}}
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12 text-center">
        {!! the_custom_logo() !!}
      </div>
      <div class="col-lg-3 col-md-6 col-12 ">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu([
          'theme_location' => 'footer_navigation',
           'menu_class' => 'navbar-nav mx-auto footer_nav'
           ]) !!}
        @endif
      </div>
      <div class="col-lg-3 col-md-6 col-12 text-center">
        <p class="title_block_footer">БЛОГ</p>
        <article class="post">
          <div class="img-block">
            <img src="{!! get_the_post_thumbnail_url($blog[0]->ID) !!}" class="w-100" alt="">
          </div>
          <div class="content-post">
           @php

           $post_id = $blog[0]->ID;
           $content =  $blog[0]->post_content;
           $content = substr($content, 0, 150);
           $content .= '<a href="'.get_permalink($post_id).'">'.pll__("Читать дальше","sage").'...</a>';

           echo $content;

           @endphp
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="contacts py-3">
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
          <div class="social-block d-flex">
            <a href='{!! the_field('инстаграм_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_instagran.png' alt='1'></a>
            <a href='{!! the_field('телеграм_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_telegram.png ' alt='3'></a>
            <a href='{!! the_field('viber_link','options') !!}'><img src='{!! get_template_directory_uri()  !!}/assets/images/small_viber.png' alt='2'></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
