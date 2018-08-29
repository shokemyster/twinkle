@extends('layouts.frontend')

@section('content')
<div class="container">
  <ul>
    @foreach ($posts as $post)
      <li style="padding:10px;margin-bottom:10px;border-bottom:1px solid white;">
        <h2><a style="color:white;font-size:18px;" href="{{route('blog.view', ['slug' => $post->slug])}}">{{$post->title}}</a></h2>
        <p style="color:white;">{{$post->category->name}}</p>
        <p style="color:white;">{{$post->excerpt}}</p>
        <p style="color:white;">Posted by {{$post->user->name}}</p>
        
      </li>
    @endforeach
  </ul>
</div>
@endsection