<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Page;

class PageController extends Controller
{
    // create new page
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

    // edit page
    public function editPageView($pageId){
      $page = Page::find($pageId);
      $user = User::get();
      $result = ['user' => $user, 'page' => $page];
      return view('layouts.admin.partials.editPage', $result);
    }

    public function updatePage(Request $request){
      $page = Page::find($request->pageId);
      $page->page_title =  $request->pageTitle;
      $page->page_content = $request->pageContent;
      $page->page_visibility = $request->optVisibility;
      $page->page_create = $request->pageCreate;
      $page->page_author = $request->pageAuthor;
      $page->save();

      return redirect()->route('allPages');
    }

    // delete page
    public function deletePage($pageId){
      $page = Page::findOrFail($pageId);
      $page->delete();
      return redirect()->route('allPages');
    }
}
