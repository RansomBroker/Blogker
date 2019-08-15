<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Page;

class PageController extends Controller
{
    //
    public function allPage(){
      $page = Page::get();
      $result = ['page' =>  $page];
      return view('layouts.admin.partials.allPages', $result);
    }

    public function addNewPageView(){
      $user = User::get();
      $result = ['user' => $user];
      return view('layouts.admin.partials.addNewPage', $result);
    }

    public function addNewPageMake(Request $request){

      $validate = $request->validate([
        'pageTitle' => 'required',
        'pageContent' => 'required',
        'pageCreate' => 'required',
        'pageAuthor' => 'required',
      ]);

      Page::create([
        'page_title' => $request->pageTitle,
        'page_content' => $request->pageContent,
        'page_visibility' => $request->optVisibility,
        'page_create' => $request->pageCreate,
        'page_author' => $request->pageAuthor,
      ]);

      return redirect()->route('allPages');

    }
}
