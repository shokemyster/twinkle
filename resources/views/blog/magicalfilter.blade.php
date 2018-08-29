@extends('layouts.frontend')

@section('content')
<div class="page-title">
  <h1>MAGICAL FILTER</h1>
</div>
<div class="magical-filter-module form">
  <form action="/magical-filter" method="post">
    {!! csrf_field() !!}
    <select name="prefecture" id="prefecture" class="form-control">
      <option value="">Select Prefecture</option>
      @foreach($prefectures as $prefecture)
        <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
      @endforeach
    </select>
    <select name="category" id="category">
      <option value="">Select Category</option>
      @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <input type="text" placeholder="Keywords..." name="q">
    <input type="submit" value="GO">
  </form>
</div>
@if(!empty($posts))
<div class="section border-bottom no-bg">
  <ul class="carousel">
    <li class="carousel-item">
      <ul class="items">
        @foreach ($posts as $post)
        <li class="item"><a href="#">
            <h5>{{$post->title}}</h5>
            <div class="image"><img src="" alt=""></div>
            <div class="meta">
              <div class="cat"><span>{{$post->category->name}}</span></div>
              <div class="visits"><span>3776 visits this year</span></div>
            </div></a></li>
        @endforeach
      </ul>
    </li>
  </ul>
</div>
@endif

@endsection