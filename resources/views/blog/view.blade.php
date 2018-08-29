@extends('layouts.frontend')

@section('content')
<div class="page-title">
  <p class="last-updated">LAST UPDATED: {{$post->updated_at}}</p>
  <h1>{{$post->title}}</h1>
  <p>{{$post->city}}, {{$post->prefecture->name}}</p>
  <div class="utility-buttons"><a href="#" class="ub1"><span class="icon"><img src="{{ asset('images/icon-star.png') }}" alt=""></span><span class="title">FAV THIS PLACE</span></a><a href="#" class="ub2"><span class="icon"><img src="{{ asset('images/icon-add.png') }}" alt=""></span><span class="title">ADD TO PLAN</span></a><a href="#" class="ub3"><span class="icon"><img src="{{ asset('images/icon-share.png') }}" alt=""></span><span class="title">SHARE</span></a><a href="#" class="ub4"><span class="icon"><img src="{{ asset('images/icon-write.png') }}" alt=""></span><span class="title">WRITE REVIEW</span></a></div>
</div>
<div class="slideshow">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="{{ asset('images/' . $post->featured_image) }}" alt=""></li>
    </ul>
  </div>
</div>
<div class="section border-bottom small-padding">
  <p class="teaser">{{$post->teaser}}</p>
</div>
<div class="section row border-bottom">
  <div class="one-half">
    <h2>Photos</h2>
    <ul class="item-images">
      <li><span style="background:url({{ asset('images/' . $post->image_photo1) }});background-size:cover;background-position:center;" class="image"></span></li>
      <li><span style="background:url({{ asset('images/' . $post->image_photo2) }});background-size:cover;background-position:center;" class="image"></span></li>
    </ul>
    <!-- <a href="#" class="button pink">View more photos</a> -->
  </div>
  <div class="one-half">
    <h2>Owner message</h2>
    <div class="item-desc">
      <h3>Welcome!</h3>
      <p>{{$post->message}}</p>
    </div>
  </div>
</div>
@if(!empty($post->image_photo1) && $post->type_id == 2)
<div class="section row border-bottom">
  <h2>Must eats!</h2>
  <ul class="item-images fifths">
    <li><span style="background:url({{ asset('images/' . $post->image_food1) }});background-size:cover;background-position:center;" class="image"></span><span class="image-caption">{{$post->image_food1_caption}}</span></li>
    <li><span style="background:url({{ asset('images/' . $post->image_food2) }});background-size:cover;background-position:center;" class="image"></span><span class="image-caption">{{$post->image_food2_caption}}</span></li>
    <li><span style="background:url({{ asset('images/' . $post->image_food3) }});background-size:cover;background-position:center;" class="image"></span><span class="image-caption">{{$post->image_food3_caption}}</span></li>
    <li><span style="background:url({{ asset('images/' . $post->image_food4) }});background-size:cover;background-position:center;" class="image"></span><span class="image-caption">{{$post->image_food4_caption}}</span></li>
    <li><span style="background:url({{ asset('images/' . $post->image_food5) }});background-size:cover;background-position:center;" class="image"></span><span class="image-caption">{{$post->image_food5_caption}}</span></li>
  </ul>
  <p class="notes mb0">Click on image to view details.</p>
</div>
@else
<div class="section row border-bottom">
  <div class="one-half">
    <h2>Events</h2>
    {!! $post->events !!}
  </div>
  @if($post->image_souvenier1)
  <div class="one-half">
    <h2>Souveniers</h2>
    <ul class="item-images thirds">
      <li><span style="background:url({{ asset('images/' . $post->image_souvenier1) }});background-size:cover;background-position:center;" class="image"></span></li>
      <li><span style="background:url({{ asset('images/' . $post->image_souvenier2) }});background-size:cover;background-position:center;" class="image"></span></li>
      <li><span style="background:url({{ asset('images/' . $post->image_souvenier3) }});background-size:cover;background-position:center;" class="image"></span></li>
    </ul>
  </div>
  @endif
</div>
@endif
<div class="section border-bottom">
  <h2>Twinkle Info</h2>
  <ul class="item-detail-info-items">
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-location1.png') }}" alt=""></span>
      <h6>Prefecture</h6><span>{{$post->prefecture->name}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-location2.png') }}" alt=""></span>
      <h6>City/Town</h6><span>{{$post->city}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-category.png') }}" alt=""></span>
      <h6>Category</h6><span>{{$post->category->name}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-tag.png') }}" alt=""></span>
      <h6>Tagged</h6><span>{{$post->tags}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-leaf.png') }}" alt=""></span>
      <h6>Season</h6><span>{{$post->season}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-users.png') }}" alt=""></span>
      <h6>Persons</h6><span>{{$post->persons}}</span>
    </li>
  </ul>
  <h2>Basic Info</h2>
  <ul class="item-detail-info-items">
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-location2.png') }}" alt=""></span>
      <h6>Address</h6><span>Itsukushima, Hiroshima.</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-train.png') }}" alt=""></span>
      <h6>Nearest Station</h6><span>{{$post->nearest_station}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-airplane.png') }}" alt=""></span>
      <h6>Nearest Airport</h6><span>{{$post->airport}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-open.png') }}" alt=""></span>
      <h6>Open Hours</h6><span>{{$post->open_hours}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-closed.png') }}" alt=""></span>
      <h6>Holiday</h6><span>{{$post->holiday}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-www.png') }}" alt=""></span>
      <h6>Website</h6><span><a href="{{$post->website}}" target="_blank">Visit site</a></span>
    </li>
  </ul>
  <h2>Accessibility Info</h2>
  <ul class="item-detail-info-items mb0">
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-world.png') }}" alt=""></span>
      <h6>Language</h6><span>{{$post->language}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-temparature.png') }}" alt=""></span>
      <h6>Temparature</h6><span>{{$post->temparature}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-suit.png') }}" alt=""></span>
      <h6>Manner</h6><span>{{$post->manner}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-sunrise.png') }}" alt=""></span>
      <h6>Sun-rise/set</h6><span>{{$post->sunrise}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-restroom.png') }}" alt=""></span>
      <h6>Restrooms</h6><span>{{$post->restrooms}}</span>
    </li>
    <li class="item-detail-info-item"><span class="icon"><img src="{{ asset('images/icon-coupon.png') }}" alt=""></span>
      <h6>Coupon</h6><span>{{$post->coupon}}</span>
    </li>
  </ul>
</div>
<div class="section border-bottom">
  <h2>Access Map</h2><a href="#" class="button teal">View on Google Maps</a>
  <div class="iframe mt20">{!! $post->gmaps !!}</div>
</div>
@endsection