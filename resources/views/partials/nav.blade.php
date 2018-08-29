@foreach ($pages as $page)
<li class="nav-item {{$page->present()->dropDownClass}}">
  <a href="{{$page->url}}" class="nav-link">
    {{$page->title}}
    @if(count($page->children))
      <span class="caret"></span>
    @endif
  </a>

  @if(count($page->children))
    <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
      @include('partials.nav', ['pages'=>$page->children])
    </ul>
  @endif
</li>
@endforeach