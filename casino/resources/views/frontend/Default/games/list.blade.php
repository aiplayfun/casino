@extends('frontend.Default.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('content')
    <!-- Slider main container -->
    <div id="main-swiper" class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

    @if ($games && count($games))
      @foreach ($games as $key=>$game)
      <div class="swiper-slide">
      @if( isset(auth()->user()->username) )
      <a class="games-box" href="{{ route('frontend.game.go', $game->name) }}?api_exit=/">
        @if($game->label)
        <div class="games-status games-hot">&#8203;</div>
        @else
        <div class="games-status">&#8203;</div>
        @endif
        @if($game->fav)
        <div class="games-fav fav-marked">&#8203;</div>
        @else
        <div class="games-fav">&#8203;</div>
        @endif
      @else
      <a class="games-box" href="#">
        <div class="games-status">&#8203;</div>
        <div class="games-fav">&#8203;</div>
      @endif
        <div class="games-border">&#8203;</div>
        <div class="games-title">{{ isset($cat1->title) ? $cat1->title : lcfirst($category1) }}<br />{{ $game->title }}</div>
        <div class="games-img">
        <img src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" casino-lazy-src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" alt="{{ $game->title }}" loading="lazy" class="img-fluid">
        </div>
        <?php $rand = rand(0,5); ?>
        <div class="animated-border-box-glow abb-<?php echo $rand?>">&#8203;</div>
        <div class="animated-border-box abb-<?php echo $rand?>">&#8203;</div>
      </a>
      </div>
      @endforeach
    @else
      <div class="swiper-slide">
      <a class="games-box" href="#">
        <div class="games-status">&#8203;</div>
        <div class="games-fav">&#8203;</div>
        <div class="games-border">&#8203;</div>
        <div class="games-title">Coming Soon</div>
        <div class="games-img">
        <img src="/frontend/Moon88/img/games/no-img.jpg" class="img-fluid" alt="...">
        </div>
      </a>
      </div>
    @endif
    </div>
    <?php /*
    <!--If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
    */ ?>
    </div>
@stop

@section('scripts')
@stop