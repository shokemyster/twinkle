@extends('layouts.app')

@section('content')


<div class="container">
  <h1>Edit Page</h1>
  <form action="{{ route('pages.update', ['page'=> $model->id]) }}" method="post">
    {{ method_field('PUT') }}
    @include('admin.pages.partials.fields')
  </form>
  <form action="{{ route('pages.destroy', ['page'=> $model->id]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" class="btn btn-danger" value="Delete this post">
  </form>
</div>


@endsection