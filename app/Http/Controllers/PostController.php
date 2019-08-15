<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use App\User;

class PostController extends Controller
{
    //post
    public function allPost(){
      $post = Post::get();
      $result = ['post' => $post];
      return view('layouts.admin.partials.allPosts', $result);
    }

    public function addNewPost(){
      $category = Category::get();
      $user = User::get();

      $result = ['category' => $category, 'user' => $user];
      return view('layouts.admin.partials.addNewPost', $result);

    }

    public function addNewPostProcess(Request $request){
      // form validation
      $validate = $request->validate([
        'postTitle' => 'required',
        'textCkeditor' => 'required',
        'postCreate' => 'required',
        'postAuthor' => 'required',
        'postCategory' => 'required',
      ]);
      // dd($request);
      // insert
      Post::create([
        'post_title' => $request->postTitle,
        'post_content' => $request->textCkeditor,
        'post_visibility' => $request->optVisibility,
        'post_create' => $request->postCreate,
        'post_author' => $request->postAuthor,
        'post_categories' => $request->postCategory,
      ]);

      return redirect()->route('allPosts');

    }

    public function editPostGetId($postId){
      $post = Post::find($postId);
      // dd($post);
      $user = User::get();
      $category = Category::get();
      $result = ['post' => $post, 'user' => $user, 'category' => $category];
      return view('layouts.admin.partials.editPost', $result);
    }

    public function updatePost(Request $request){
      $validate = $request->validate([
        'postTitle' => 'required',
        'textCkeditor' => 'required',
        'postCreate' => 'required',
        'postAuthor' => 'required',
        'postCategory' => 'required',
      ]);

      $post = Post::find($request->postId);
      $post->post_title =  $request->postTitle;
      $post->post_content = $request->textCkeditor;
      $post->post_visibility = $request->optVisibility;
      $post->post_create = $request->postCreate;
      $post->post_author = $request->postAuthor;
      $post->post_categories = $request->postCategory;
      $post->save();

      return redirect()->route('allPosts');
    }

    public function deletePost(Request $request){
      $deletePost = Post::findOrFail($request->id);
      $deletePost->delete();
      return response()->json(['success'=>'user deleted successfully']);
    }

    // category
    public function categoryView(){
      $category = Category::get();
      $result = ['category' => $category];
      return view('layouts.admin.partials.categories', $result);
    }

    public function addCategoryProcess(Request $request){
      Category::create([
        'categories_name' => $request->category,
        'categories_description' =>$request->categoryDescription,
      ]);
      $category = Category::get();

      return response()->json(['success'=> 'Operation Success !']);
    }

    public function editCategoryProcess(Request $request){
        $updateCategoryName = Category::find($request->id);
        $updateCategoryName->categories_name = $request->getNewValue;
        $updateCategoryName->save();

        return response()->json(['success'=> 'Operation Success !']);
    }

    public function editCategoryDesc(Request $request){
        $updateCategoryDesc = Category::find($request->id);
        $updateCategoryDesc->categories_description = $request->getNewValue;
        $updateCategoryDesc->save();

        return response()->json(['success'=> 'Operation Success !']);;
    }

    public function deleteCategory(Request $request){
        $categoryDelete = Category::findOrFail($request->id);
        $categoryDelete->delete();
        return response()->json(['success'=>'user deleted successfully']);
    }

    // public function show(){
    //   DB::enableQueryLog();
    //   $post = Post::find(1);
    //
    //   // return dd(DB::getQueryLog($post->users));
    //   // return dd($post);
    //   // $result = ['post' => $post];
    //   // foreach ($result as $post) {
    //   //   // code...
    //   //   echo "post Title : ". $post->post_title;
    //   //   echo "<br>";
    //   //   echo "<br>";
    //   //   echo "post Content : ". $post->post_content;
    //   //   echo "<br>";
    //   //   echo "<br>";
    //   //   foreach($post->users as $author){
    //   //     echo "Author : ". $author->username;
    //   //   }
    //   // }
    //
    // }
}
