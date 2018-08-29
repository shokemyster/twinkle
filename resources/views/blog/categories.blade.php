@extends('layouts.frontend')

@section('content')
<div class="page-title">
  <h1>BROWSE BY CATEGORY</h1>
</div>
<div class="section border-bottom no-bg">
  <h2>EAT</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($eats as $post)
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
<div class="section border-bottom no-bg">
  <h2>SEE</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($sees as $post)
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
<div class="section border-bottom no-bg">
  <h2>LEARN</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($learns as $post)
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
<div class="section border-bottom no-bg">
  <h2>BUY</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($buys as $post)
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
<div class="section border-bottom no-bg">
  <h2>SEASONAL</h2>
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($seasonals as $post)
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

@endsection