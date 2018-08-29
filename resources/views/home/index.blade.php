@extends('layouts.frontend')

@section('content')
<div class="slideshow">
  <div class="overlay">
    <h2>Feel lost in Japan? Looking for more cool places? TWINKLE will be your perfect tour guide.</h2>
    <div class="buttons"><a href="#" class="button pink">Take a tour</a></div>
  </div>
  <div class="flexslider">
    <ul class="slides">
      <li><img src="./images/miyajima.jpg" alt=""></li>
    </ul>
  </div>
</div>
<div class="section border-bottom no-bg">
  <h2>Trending places near you.</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($posts as $post)
        <li class="item"><a href="{{url('/item/' . $post->slug)}}">
            <h5>{{$post->title}}</h5>
            <div class="image" style="background-image:url({{asset('images/' . $post->featured_image)}})"></div>
            <div class="meta">
              <div class="cat"><span>{{$post->category->name}}</span></div>
              <!-- <div class="visits"><span>3776 visits this year</span></div> -->
            </div></a></li>
        @endforeach
      </ul>
    </li>
  </ul>
</div>
<div class="section no-bg">
  <h2>Twinkle Tools</h2>
  <p>Find the places for you easily.</p>
  <div class="twinkle-tools">
    <div class="row mb20">
      <div class="one-third">
        <div class="twinkle-tool tt1"><a href="#">Magical Filter</a><span class="caption">Enter your keywords then boom!</span></div>
      </div>
      <div class="one-third">
        <div class="twinkle-tool tt2"><a href="#">Twinkle Genie</a><span class="caption">Talk to him and he'll find you the right place.</span></div>
      </div>
      <div class="one-third">
        <div class="twinkle-tool tt3"><a href="#">How many people?</a><span class="caption">Alone? Couple? Family? Group of friends?</span></div>
      </div>
    </div>
    <div class="row">
      <div class="one-third">
        <div class="twinkle-tool tt4"><a href="#">Tour Planner</a><span class="caption">Figure out and save your tour plans.</span></div>
      </div>
      <div class="one-third">
        <div class="twinkle-tool tt5"><a href="#">Recommendation</a><span class="caption">Staff's choice.</span></div>
      </div>
      <div class="one-third">
        <div class="twinkle-tool tt6"><a href="#">Twinstagram</a><span class="caption">Twinkle's user gallery.</span></div>
      </div>
    </div>
  </div>
</div>
<div class="section light">
  <h2>News</h2>
  <ul class="home-news">
    <li><span class="date">2018/8/24</span><span class="cat">TOPICS</span><a href="">TWINKLE BETA RELEASED</a></li>
    <!-- <li><span class="date">2020/2/20</span><span class="cat">TOPICS</span><a href="">NEWS TITLE</a></li>
    <li><span class="date">2020/2/20</span><span class="cat">TOPICS</span><a href="">NEWS TITLE</a></li>
    <li><span class="date">2020/2/20</span><span class="cat">TOPICS</span><a href="">NEWS TITLE</a></li>
    <li><span class="date">2020/2/20</span><span class="cat">TOPICS</span><a href="">NEWS TITLE</a></li>
    <li><span class="date">2020/2/20</span><span class="cat">TOPICS</span><a href="">NEWS TITLE</a></li> -->
  </ul>
</div>
@endsection
