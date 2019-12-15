{{--
  Template Name: Oplata i garantial
--}}

@extends('layouts.app')

@section('content')
<div class="oplata_i_garantii">
  <div class="container">
    <h1>{!! pll_e('Оплата и гарантия','sage') !!}</h1>
    <div class="first_section">
      <h3 class="title_section">{!! the_field('title_first_section_Oplata',$post) !!}</h3>
      <div class="row">
        @foreach($block_first_section as $block)
          <div class="col-lg-3 col-md-6 col-12">
            <div class="block">
              <p class="title_block">{{ $block->title }}</p>
              <p class="description">{{ $block->description }} </p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-md-8 mx-auto">
        <p class="bottom_text">{!! the_field('bottom_text_first_section',$post) !!}</p>
      </div>
    </div>
  </div>
  <div class="second-section">
    <div class="container">
      <h3 class="title_section">{!! the_field('title_second_section_Oplata',$post) !!}</h3>
      <p>{!! the_field('sub_title_second_section_Oplata',$post) !!}</p>
      <div class="row two_columns">
        @foreach($block_second_section as $block)
        <div class="col-md-6 second_block">
          <p class="title_smal">
            {{ $block->title }}
          </p>
          {!! wp_specialchars_decode($block->description,'sage') !!}
        </div>
        @endforeach
      </div>
      <div class="block_bottom_text">
        <p class="title_smal">{!! the_field('title_last_block_second_section_Oplata',$post) !!}</p>
        {!! the_field('description_last_block_second_section_Oplata',$post) !!}
      </div>
    </div>
  </div>
  <div class="third-section">
    <h3 class="title_section">{!! the_field('title_third_section_Oplata',$post) !!}</h3>
    <div class="numbers_block">
      <div class="container">
        <div class="row">
          @foreach($numbers_block as $block)
          <div class="col-md-4 col-12 number_block">
            <p class="title">{{ $block->title }}</p>
            <p class="description">{{ $block->description }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="questions">
      <h3 class="title_section text-center">{!! the_field('title_section_questions_Oplata',$post) !!}</h3>
      <div class="container">
        <div class="questions_blocks col-md-10 col-12 mx-auto">
        @foreach($questions_section as $question)
          <div class="question">
            <div class="title_block">
              <p class="title_question">{{ $question->title }}</p>
            </div>
            <div class="content_question_block">
              {!! wp_specialchars_decode($question->description,'sage') !!}
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <button class="btn button-red" data-toggle="modal" data-target="#modalQuestion">{!! pll_e('ЗАДАТЬ ВОПРОС','sage') !!}</button>
  </div>
</div>
  @include('partials.modal-question')
@endsection
