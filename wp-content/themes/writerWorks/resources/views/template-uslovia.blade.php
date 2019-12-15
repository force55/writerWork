{{--
  Template Name: Uslovia
--}}

@extends('layouts.app')

@section('content')
  <div class="container custom-page">
    <h1>{!! pll_e('Условия','sage') !!}</h1>
    <div class="content_uslovia">
      {!! wp_specialchars_decode(get_field('условия',$post),'sage') !!}
    </div>
    <button class="btn button button-red">{!! pll_e('СКАЧАТЬ ШАБЛОН ДОГОВОРА','sage') !!}</button>
  </div>
@endsection
