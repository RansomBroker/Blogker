<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;

class PostController extends Controller
{
    //
    public function addNewPost(){
      return true;
    }

    public function show(){
      DB::enableQueryLog();
      $post = Post::find(1);

      // return dd(DB::getQueryLog($post->users));
      // return dd($post);
      // $result = ['post' => $post];
      // foreach ($result as $post) {
      //   // code...
      //   echo "post Title : ". $post->post_title;
      //   echo "<br>";
      //   echo "<br>";
      //   echo "post Content : ". $post->post_content;
      //   echo "<br>";
      //   echo "<br>";
      //   foreach($post->users as $author){
      //     echo "Author : ". $author->username;
      //   }
      // }

    }
}
