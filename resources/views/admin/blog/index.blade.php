@extends('layouts.app')

@section('content')

<div class="container">
  @if (session('status'))
  <div class="alert alert-info">
    {{ session('status') }}
  </div>
  @endif
  <br>
  <a href="{{ route('blog.create') }}" class="btn btn-primary">新規作成</a>
  <div style="height:30px;"></div>
  <table class="table">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>作者</th>
        <th>スラッグ（URL）</th>
        <th>公開日時</th>
        <th>カテゴリー</th>
        <th>都道府県</th>
        <th>表示</th>
      </tr>
    </thead>
    @foreach($model as $post)
      <tr>
        <td>
          <a href="{{ route('blog.edit', ['blog' => $post->id]) }}">{{ $post->title }}</a>
        </td>
        <td>{{ $post->user()->first()->name }}</td>
        <td>{{ $post->slug }}</td>
        <td></td>
        <td>{{ $post->category->name }}</td>
        <td>{{ $post->prefecture->name }}</td>
        <td><a href="{{ url('/') . '/item/' . $post->slug}}" class="btn btn-primary">表示</a></td>
      </tr>
    @endforeach
  </table>
  {{ $model->links() }}
</div>

<form action="" method="POST" id="delete-form">
  {{ method_field('DELETE') }}
  {!! csrf_field() !!}
</form>

@endsection