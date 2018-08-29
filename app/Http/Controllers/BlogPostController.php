<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogPostController extends Controller
{
    public function index(){
      $published = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->orderBy('published_at','desc')
                    ->paginate('15');

      return view('blog.index')->with('posts',$published);
    }

    public function view($slug){
      $post = Post::with('user')
                    ->where('slug', '=', $slug)
                    ->firstOrFail();
      return view('blog.view')->with('post', $post);
    }

    public function viewAllCategories(){
      $eat = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->where('category_id', '=', 1)
                    ->orderBy('published_at','desc')
                    ->paginate('5');
      $see = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->where('category_id', '=', 2)
                    ->orderBy('published_at','desc')
                    ->paginate('5');
      $learn = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->where('category_id', '=', 3)
                    ->orderBy('published_at','desc')
                    ->paginate('5');
      $buy = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->where('category_id', '=', 4)
                    ->orderBy('published_at','desc')
                    ->paginate('5');
      $seasonal = Post::with('user')
                    //->where('published_at', '<', Carbon::now())
                    ->where('category_id', '=', 5)
                    ->orderBy('published_at','desc')
                    ->paginate('5');
      $data = [
          'eats' => $eat,
          'sees' => $see,
          'learns' => $learn,
          'buys' => $buy,
          'seasonals' => $seasonal,
      ];
      return view('blog.categories')->with($data);
    }

    public function search(Request $request)
    {
        //return $request->input('q');
      $keyword = $request->input('q');
      $category_id = $request->input('category');
      $prefecture_id = $request->input('prefecture');

      /*$post = Post::where('title', 'LIKE', '%'.$keyword.'%')
      ->orWhere('category_id', '=', $category_id)
      ->get();*/

      $post = Post::where('title', 'LIKE', '%'.$keyword.'%')
      ->where('category_id', '=', $category_id)
      ->where('prefecture_id', '=', $prefecture_id)
      ->get();
      return view('blog.magicalfilter')->with('posts',$post);
      //return $post;
      //exit();
    }
}
