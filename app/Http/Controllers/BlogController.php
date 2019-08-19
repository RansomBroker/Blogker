<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Post;
use App\Page;
use App\Role;
use App\Category;

    
class BlogController extends Controller
{
    //
    public function home(){ 
        $post = Post::where('post_visibility', 'public')->get();
        $result = ['post' => $post,];
        return view('layouts.theme.ransombroker.partials.home', $result);
    }

    public function read($post){
        $post = Post::where('slug', $post)->first();
        if($post != null){
            $result = ['post' => $post,];
            return view('layouts.theme.ransombroker.partials.single', $result);
        }
        return view('layouts.theme.ransombroker.partials.404');
        
    }

    public function category($category){
        $category = Category::select('id_categories')->where('categories_name', $category)->first();
        $post = Post::where('post_categories', $category->id_categories)->get();
        $result = ['post' => $post,];
        return view('layouts.theme.ransombroker.partials.category', $result);
    }

    
}
