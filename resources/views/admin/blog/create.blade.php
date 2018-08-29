@extends('layouts.app')

@section('content')


<div class="container">
  <h1>新しいアイテム</h1>
  <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
    @include('admin.blog.partials.fields')
  </form>
</div>


@endsection