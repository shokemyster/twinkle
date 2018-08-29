@extends('layouts.app')

@section('content')


<div class="container">
  <h1>アイテム編集</h1>
  <form action="{{ route('blog.update', ['blog'=> $model->id]) }}" method="post" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @include('admin.blog.partials.fields')
  </form>
  <form action="{{ route('blog.destroy', ['page'=> $model->id]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" class="btn btn-danger" value="削除">
  </form>
</div>


@endsection