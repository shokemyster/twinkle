<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Post;
use App\Prefecture;
use App\Type;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Image;
use Storage;

class BlogController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdminOrEditor()) {
            $posts = Post::paginate(50);
        } else {
            $posts = Auth::user()->posts()->paginate(50);
        }
        return view('admin.blog.index', ['model' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new Post(),
            'prefectures' => Prefecture::all(),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];
        return view('admin.blog.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        /*Auth::user()->posts()->save(
            new Post($request->only(
                ['title','slug','published_at','excerpt','body','prefecture_id']
            ))
        );*/

        $post = new Post;

        //$post = $request->all();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->city = $request->city;
        $post->tags = $request->tags;
        $post->season = $request->season;
        $post->persons = $request->persons;
        $post->published_at = $request->published_at;
        //$post->excerpt = $request->excerpt;
        //$post->body = $request->body;
        $post->prefecture_id = $request->prefecture_id;
        $post->teaser = $request->teaser;
        $post->message = $request->message;
        $post->address = $request->address;
        $post->nearest_station = $request->nearest_station;
        $post->open_hours = $request->open_hours;
        $post->holiday = $request->holiday;
        $post->website = $request->website;
        $post->airport = $request->airport;
        $post->language = $request->language;
        $post->temparature = $request->temparature;
        $post->manner = $request->manner;
        $post->sunrise = $request->sunrise;
        $post->restrooms = $request->restrooms;
        $post->coupon = $request->coupon;
        $post->gmaps = $request->gmaps;
        $post->events = $request->events;
        $post->type_id = $request->type_id;
        $post->category_id = $request->category_id;
        $post->image_photo1 = $request->image_photo1;
        $post->image_photo2 = $request->image_photo2;
        $post->image_food1 = $request->image_food1;
        $post->image_food2 = $request->image_food2;
        $post->image_food3 = $request->image_food3;
        $post->image_food4 = $request->image_food4;
        $post->image_food5 = $request->image_food5;
        $post->image_souvenier1 = $request->image_souvenier1;
        $post->image_souvenier2 = $request->image_souvenier2;
        $post->image_souvenier3 = $request->image_souvenier3;
        $post->image_photo1_caption = $request->image_photo1_caption;
        $post->image_photo2_caption = $request->image_photo2_caption;
        $post->image_food1_caption = $request->image_food1_caption;
        $post->image_food2_caption = $request->image_food2_caption;
        $post->image_food3_caption = $request->image_food3_caption;
        $post->image_food4_caption = $request->image_food4_caption;
        $post->image_food5_caption = $request->image_food5_caption;
        $post->image_souvenier1_caption = $request->image_souvenier1_caption;
        $post->image_souvenier2_caption = $request->image_souvenier2_caption;
        $post->image_souvenier3_caption = $request->image_souvenier3_caption;

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1680, 716)->save($location);

            $post->featured_image = $filename;
        }

        if($request->hasFile('image_photo1')){
            $image = $request->file('image_photo1');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_photo1 = $filename;
        }

        if($request->hasFile('image_photo2')){
            $image = $request->file('image_photo2');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_photo2 = $filename;
        }

        if($request->hasFile('image_food1')){
            $image = $request->file('image_food1');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_food1 = $filename;
        }

        if($request->hasFile('image_food2')){
            $image = $request->file('image_food2');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_food2 = $filename;
        }

        if($request->hasFile('image_food3')){
            $image = $request->file('image_food3');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_food3 = $filename;
        }

        if($request->hasFile('image_food4')){
            $image = $request->file('image_food4');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_food4 = $filename;
        }

        if($request->hasFile('image_food5')){
            $image = $request->file('image_food5');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_food5 = $filename;
        }

        if($request->hasFile('image_souvenier1')){
            $image = $request->file('image_souvenier1');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_souvenier1 = $filename;
        }

        if($request->hasFile('image_souvenier2')){
            $image = $request->file('image_souvenier2');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_souvenier2 = $filename;
        }

        if($request->hasFile('image_souvenier3')){
            $image = $request->file('image_souvenier3');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1400, 933)->save($location);

            $post->image_souvenier3 = $filename;
        }

        Auth::user()->posts()->save($post);

        return redirect()->route('blog.index')->with('status', 'The post was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        $data = [
            'model' => $blog,
            'prefectures' => Prefecture::all(),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];
        return view('admin.blog.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Post $blog)
    {
        if (Auth::user()->cant('update', $blog)) {
            return redirect()->route('blog.index')->with('status', 'You do not have permission to edit that post.');
        }

        $post = Post::find($blog->id);

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->city = $request->city;
        $post->tags = $request->tags;
        $post->season = $request->season;
        $post->persons = $request->persons;
        $post->published_at = $request->published_at;
        //$post->excerpt = $request->excerpt;
        //$post->body = $request->body;
        $post->prefecture_id = $request->prefecture_id;
        $post->teaser = $request->teaser;
        $post->message = $request->message;
        $post->address = $request->address;
        $post->nearest_station = $request->nearest_station;
        $post->open_hours = $request->open_hours;
        $post->holiday = $request->holiday;
        $post->website = $request->website;
        $post->airport = $request->airport;
        $post->language = $request->language;
        $post->temparature = $request->temparature;
        $post->manner = $request->manner;
        $post->sunrise = $request->sunrise;
        $post->restrooms = $request->restrooms;
        $post->coupon = $request->coupon;
        $post->gmaps = $request->gmaps;
        $post->events = $request->events;
        $post->type_id = $request->type_id;
        $post->category_id = $request->category_id;
        $post->image_photo1_caption = $request->image_photo1_caption;
        $post->image_photo2_caption = $request->image_photo2_caption;
        $post->image_food1_caption = $request->image_food1_caption;
        $post->image_food2_caption = $request->image_food2_caption;
        $post->image_food3_caption = $request->image_food3_caption;
        $post->image_food4_caption = $request->image_food4_caption;
        $post->image_food5_caption = $request->image_food5_caption;
        $post->image_souvenier1_caption = $request->image_souvenier1_caption;
        $post->image_souvenier2_caption = $request->image_souvenier2_caption;
        $post->image_souvenier3_caption = $request->image_souvenier3_caption;

        $image_uploads = array(
                            'featured_image',
                            'image_photo1',
                            'image_photo2',
                            'image_food1',
                            'image_food2',
                            'image_food3',
                            'image_food4',
                            'image_food5',
                            'image_souvenier1',
                            'image_souvenier2',
                            'image_souvenier3',
                        );
        foreach($image_uploads as $image_upload){
            if($request->hasFile($image_upload)){

                $image = $request->file($image_upload);
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename);
                Image::make($image)->resize(1680, 716)->save($location);
                $oldFilename = $post->$image_upload;
                $post->$image_upload = $filename;
                Storage::delete($oldFilename);
            }
        }
        

        $post->save();
        //$blog->fill($request->all())->save();

        return redirect()->route('blog.index')->with('status', 'The post was updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        if (Auth::user()->cant('delete', $blog)) {
            return redirect()->route('blog.index')->with('status', 'You do not have permission to delete that post.');
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('status', 'The post was deleted.');
    }
}
