<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CategoryController extends Controller
{
    public function view($slug){
      $category = Category::where('slug',$slug)->first()->posts;
      return view('blog.index')->with('posts',$category);
    }
}
