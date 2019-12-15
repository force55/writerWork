@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-single-'.get_post_type())
  @endwhile
  <div class="singleService">
    <h2 class="singleService-title"></h2>
    <ul class="singleService-features features">
      <li class="features-item"></li>
      <li class="features-item"></li>
      <li class="features-item"></li>
    </ul>
    
    <div class="singleService-product product-wrp">
      <div class="product"></div>
      <div class="product-info"></div>
      <div class="product-include"></div>
    </div>

    <div class="singleService-howtoBuy howtoBuy">
      <h2 class="howtoBuy-title"></h2>
      <p class="howtoBuy-text"></p>

      <h4 class="howtoBuy-subtitle"></h4>
      <ul class="howtoBuy-list">
        <li class="howtoBuy-item"></li>
        <li class="howtoBuy-item"></li>
        <li class="howtoBuy-item"></li>
      </ul>
    </div>

    <div class="singleService-howMuch howMuch">
      <h2 class="howMuch-title"></h2>
      <p class="howMuch-text"></p>
    </div>

    <div class="singleService-whtaInclude whtaInclude">
      <h2 class="whtaInclude-title"></h2>
      <p class="whtaInclude-text"></p>
      <h3 class="whtaInclude-subtitle"></h3>
       <ul class="whtaInclude-list">
        <li class="whtaInclude-item"></li>
        <li class="whtaInclude-item"></li>
        <li class="whtaInclude-item"></li>
      </ul>
    </div>

    <div class="singleService-callUs callUs">
       <h2 class="callUs-title"></h2>
        <p class="callUs-text"></p>
    </div>

  </div>
@endsection
