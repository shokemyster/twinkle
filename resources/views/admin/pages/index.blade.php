@extends('layouts.app')

@section('content')


<div class="container">
  <a href="{{ route('pages.create') }}" class="btn btn-primary">新規作成</a>
  <div style="height:30px;"></div>
  <table class="table">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>URL</th>
        <th>表示</th>
      </tr>
    </thead>
    @foreach($pages as $page)
      <tr>
        <td>
          <a href="{{ route('pages.edit', ['page' => $page->id]) }}">{{ $page->present()->paddedTitle }}</a>
        </td>
        <td>{{ $page->url }}</td>
        <td><a href="{{ url('/') . $page->url}}" class="btn btn-primary">表示</a></td>
        <!-- <td class="text-right">
          <a href="{{ route('pages.destroy', ['page'=>$page->id]) }}">Delete</a>
        </td> -->
      </tr>
    @endforeach
  </table>
  {{ $pages->links() }}
</div>

<form action="" method="POST" id="delete-form">
  {{ method_field('DELETE') }}
  {!! csrf_field() !!}
</form>

@endsection