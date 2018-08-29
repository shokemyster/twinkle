{!! csrf_field() !!}

@if(!$errors->isEmpty())

<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $message)
  <li>{{$message}}</li>
  @endforeach
  </ul>
</div>
@endif

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">基本情報</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="image-upload-tab" data-toggle="tab" href="#image-upload" role="tab" aria-controls="image-upload" aria-selected="false">画像アップロード</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div style="height:30px"></div>
    <h3>基本情報</h3>
    <div class="form-group">
      <label for="title">タイトル</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$model->title}}">
    </div>
    <div class="form-group">
      <label for="url">スラッグ（URL）</label>
      <input type="text" class="form-control" id="slug" name="slug" value="{{$model->slug}}">
    </div>
    <div class="form-group">
      <label for="published_at">公開日時</label>
      <input type="text" class="form-control" id="published_at" name="published_at" value="{{$model->published_at}}">
    </div>
    <div class="form-group">
      <label for="title">カテゴリー</label>
      <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $category)
          @if($model->category_id == $category->id)
            <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
          @else
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">表示タイプ</label>
      <select name="type_id" id="type_id" class="form-control">
        @foreach($types as $type)
          @if($model->type_id == $type->id)
            <option value="{{$type->id}}" selected="selected">{{$type->name}}</option>
          @else
            <option value="{{$type->id}}">{{$type->name}}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h3>詳細情報</h3>
    <!-- <div class="form-group">
      <label for="title">Body</label>
      <textarea class="form-control" id="body" name="body">{{$model->body}}</textarea>
    </div>
    <div class="form-group">
      <label for="title">Excerpt</label>
      <textarea class="form-control" id="excerpt" name="excerpt">{{$model->excerpt}}</textarea>
    </div> -->
    <div class="form-group">
      <label for="title">都道府県</label>
      <select name="prefecture_id" id="prefecture_id" class="form-control">
        @foreach($prefectures as $prefecture)
          @if($model->prefecture_id == $prefecture->id)
            <option value="{{$prefecture->id}}" selected="selected">{{$prefecture->name}}</option>
          @else
            <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="city">市区町村</label>
      <input type="text" class="form-control" id="city" name="city" value="{{$model->city}}">
    </div>

    <div class="form-group">
      <label for="title">ティザー文章</label>
      <textarea class="form-control" id="teaser" name="teaser">{{$model->teaser}}</textarea>
    </div>
    <div class="form-group">
      <label for="title">オーナーメッセージ</label>
      <textarea class="form-control" id="message" name="message">{{$model->message}}</textarea>
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h3>Twinkle Info</h3>  
    <div class="form-group">
      <label for="title">タグ</label>
      <input type="text" id="tags" name="tags" value="{{$model->tags}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">季節</label>
      <input type="text" id="season" name="season" value="{{$model->season}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">人数</label>
      <input type="text" id="persons" name="persons" value="{{$model->persons}}" class="form-control">
    </div>

    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h3>Basic Info</h3>  
    <div class="form-group">
      <label for="title">所在地</label>
      <input type="text" id="address" name="address" value="{{$model->address}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">最寄り駅</label>
      <input type="text" id="nearest_station" name="nearest_station" value="{{$model->nearest_station}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">最寄りの空港</label>
      <input type="text" id="airport" name="airport" value="{{$model->airport}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">営業時間</label>
      <input type="text" id="open_hours" name="open_hours" value="{{$model->open_hours}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">定休日</label>
      <input type="text" id="holiday" name="holiday" value="{{$model->holiday}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">WebサイトURL</label>
      <input type="text" id="website" name="website" value="{{$model->website}}" class="form-control">
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h3>Accessibility Info</h3>  
    <div class="form-group">
      <label for="title">対応言語</label>
      <input type="text" id="language" name="language" value="{{$model->language}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">気温</label>
      <input type="text" id="temparature" name="temparature" value="{{$model->temparature}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">マナー</label>
      <input type="text" id="manner" name="manner" value="{{$model->manner}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">日の出・日の入</label>
      <input type="text" id="sunrise" name="sunrise" value="{{$model->sunrise}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">トイレの有無</label>
      <input type="text" id="restrooms" name="restrooms" value="{{$model->restrooms}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">クーポン</label>
      <input type="text" id="coupon" name="coupon" value="{{$model->coupon}}" class="form-control">
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h3>その他</h3>
    <div class="form-group">
      <label for="title">Google Maps埋め込み iframeコード</label>
      <textarea class="form-control" id="gmaps" name="gmaps">{{$model->gmaps}}</textarea>
    </div>
    <div class="form-group">
      <label for="title">イベント情報テーブル tableコード</label>
      <textarea class="form-control" id="events" name="events">{{$model->events}}</textarea>
    </div>
  </div>
  <div class="tab-pane fade" id="image-upload" role="tabpanel" aria-labelledby="image-upload-tab">
    <div style="height:30px"></div>
    <h3>画像アップロード</h3>
    <div class="form-group">
      <label for="featured_image">メイン画像</label>
      @if($model->featured_image)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->featured_image) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="featured_image" name="featured_image" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h4>サブ画像（2枚まで）</h4>
    <div class="form-group">
      <label for="image_photo1">画像1</label>
      @if($model->image_photo1)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_photo1) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_photo1" name="image_photo1" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_photo1_caption">キャプション</label>
      <input type="text" id="image_photo1_caption" name="image_photo1_caption" value="{{$model->image_photo1_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_photo2">画像2</label>
      @if($model->image_photo2)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_photo2) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_photo2" name="image_photo2" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_photo2_caption">キャプション</label>
      <input type="text" id="image_photo2_caption" name="image_photo2_caption" value="{{$model->image_photo2_caption}}" class="form-control">
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h4>料理画像（5枚まで）</h4>
    <div class="form-group">
      <label for="image_food1">画像1</label>
      @if($model->image_food1)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_food1) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_food1" name="image_food1" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_food1_caption">キャプション</label>
      <input type="text" id="image_food1_caption" name="image_food1_caption" value="{{$model->image_food1_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_food2">画像2</label>
      @if($model->image_food2)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_food2) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_food2" name="image_food2" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_food2_caption">キャプション</label>
      <input type="text" id="image_food2_caption" name="image_food2_caption" value="{{$model->image_food2_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_food3">画像3</label>
      @if($model->image_food3)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_food3) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_food3" name="image_food3" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_food3_caption">キャプション</label>
      <input type="text" id="image_food3_caption" name="image_food3_caption" value="{{$model->image_food3_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_food4">画像4</label>
      @if($model->image_food4)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_food4) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_food4" name="image_food4" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_food4_caption">キャプション</label>
      <input type="text" id="image_food4_caption" name="image_food4_caption" value="{{$model->image_food4_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_food5">画像5</label>
      @if($model->image_food5)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_food5) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_food5" name="image_food5" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_food5_caption">キャプション</label>
      <input type="text" id="image_food5_caption" name="image_food5_caption" value="{{$model->image_food5_caption}}" class="form-control">
    </div>
    <div style="height:15px"></div>
    <hr>
    <div style="height:15px"></div>
    <h4>お土産画像（3枚まで）</h4>
    <div class="form-group">
      <label for="image_souvenier1">画像1</label>
      @if($model->image_souvenier1)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_souvenier1) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_souvenier1" name="image_souvenier1" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_souvenier1_caption">キャプション</label>
      <input type="text" id="image_souvenier1_caption" name="image_souvenier1_caption" value="{{$model->image_souvenier1_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_souvenier2">画像2</label>
      @if($model->image_souvenier2)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_souvenier2) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_souvenier2" name="image_souvenier2" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_souvenier2_caption">キャプション</label>
      <input type="text" id="image_souvenier2_caption" name="image_souvenier2_caption" value="{{$model->image_souvenier2_caption}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="image_souvenier3">画像3</label>
      @if($model->image_souvenier3)
        <div class="image" style="margin-bottom:20px;">
          <img src="{{ asset('images/' . $model->image_souvenier3) }}" alt="" style="width:30%;display:block;">
        </div>
      @endif
      <input type="file" id="image_souvenier3" name="image_souvenier3" accept="image/png, image/jpeg" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image_souvenier3_caption">キャプション</label>
      <input type="text" id="image_souvenier3_caption" name="image_souvenier3_caption" value="{{$model->image_souvenier3_caption}}" class="form-control">
    </div>
  </div>
</div>



<div style="height:15px"></div>
<hr>
<div style="height:15px"></div>
<div class="form-group">
  @if($model->title)
    <input type="submit" class="btn btn-primary" value="更新" />
  @else
    <input type="submit" class="btn btn-primary" value="公開" />
  @endif
</div>