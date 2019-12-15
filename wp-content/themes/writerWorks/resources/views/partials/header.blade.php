<header class="banner">
  <div class="container">
{{--    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
{{--    <nav class="nav-primary navbar navbar-light bg-light">--}}

{{--    </nav>--}}
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{!! home_url() !!}"><img src="{!! App::logo() !!}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menu-main-container" id="navbarNav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
           'menu_class' => 'navbar-nav ',
           'items_wrap'     => my_nav_wrap()
           ]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
