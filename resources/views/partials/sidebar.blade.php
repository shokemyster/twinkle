<div class="sidebar">
  <aside class="widget">
    <ul class="side-menu">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/categories') }}">Categories</a></li>
      <!-- <li><a href="#">Trending</a></li> -->
      <!-- <li><a href="#">Prefectures</a></li> -->
      <!-- <li><a href="#">Twinkle Tools</a></li> -->
    </ul>
  </aside>
  <aside class="widget">
    <ul class="side-menu">
      <li><a href="{{ url('/magical-filter') }}">Magical Filter</a></li>
      <li><a href="#">Twinkle Genie</a></li>
    </ul>
  </aside>
  <!-- <aside class="widget">
    <ul class="side-menu">
      <li><a href="#">Must eat foods</a></li>
      <li><a href="#">Japanese manner</a></li>
      <li><a href="#">Travel Tips</a></li>
      <li><a href="#">FAQ's</a></li>
      <li><a href="#">Favorites</a></li>
    </ul>
  </aside> -->
  <div id="current-jst">
    <p>Current Japanese Date &amp; Time</p><span>{{ date('m/d, Y - H:i:s') }}</span>
  </div>
  <p id="sidebar-cr">{{ date('Y') }} © Twinkle.</p>
</div>