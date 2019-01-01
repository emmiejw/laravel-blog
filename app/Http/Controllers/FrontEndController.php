<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Profile;
use App\Tag;
use App\Category;
use App\User;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
                ->with('title', Setting::first()->site_name)
                ->with('categories', Category::take(5)->get())
                ->with('first_post', Post::orderBy('created_at', 'asc')->first())
                ->with('second_post', Post::orderBy('created_at', 'asc')->skip(1)->take(1)->get()->first())
                ->with('third_post', Post::orderBy('created_at', 'asc')->skip(2)->take(1)->get()->first())
                ->with('OnlineShop', Category::find(4))
                ->with('React', Category::find(5))
                ->with('VueJS', Category::find(6))
                ->with('ASPNet', Category::find(7))
                ->with('settings', Setting::first());
 
    }

    public function singlePost($id)
    {
        $post = \App\Post::findOrFail($id); 

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');
    
        return view('single')->with('post', $post)
                             ->with('title', $post->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get())
                             ->with('user', User::first())
                             ->with('profile', Profile::first())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id))
                             ->with('tags', Tag::all());
    }
    public function category($id)
    {
        $category = Category::find($id);
        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(5)->get());
    }
    public function tag($id)
    {
        $tag = Tag::find($id);
        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', Setting::first())
                          ->with('categories', Category::take(5)->get());
    }
}
