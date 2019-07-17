<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class AuthController extends Controller
{
    //

    public function showAllUser(){
      $user = User::get();

      return view('layouts.admin.partials.allUsers', ['user' => $user]);
    }

    public function register(Request $request){
      // validate request
      $validateData = $request->validate([
        'username' => 'required',
        'email' => 'required',
        'name' => 'required',
        'bio' => 'required',
        'password' => 'required|min:8|confirmed',
        'role' => 'required',
        'upload-picture' => 'required',
      ]);

      // explode the role to array
      $role = explode(",", $request->role);

      // destination
      $destinationUpload = 'img/profile';

      // storage to variable
      $fileUploadPicture = $request->file('upload-picture');
      // create new name of file
      $profilePictureName = time()."_".$fileUploadPicture->getClientOriginalName();
      // uplaoad it
      $fileUploadPicture->move($destinationUpload, $profilePictureName);

      User::create([
        'role' => $role[0],
        'image_profile' => $profilePictureName,
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'description' => $request->bio,
        'role_name' => $role[1],
      ]);

      return redirect()->route('dashboard');

    }

    public function editProfileView(){
      return view('layouts.admin.partials.userProfile');
    }

    public function editProfileId($userId){
      $user = User::where('id_user', $userId)->get();
      $data = ['user' => $user];
      return view('layouts.admin.partials.userProfile', $data);
    }

    public function login(Request $request){

      if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        // code...
        // return dd(Auth::attempt(['username' => $request->username, 'password' => $request->password]));
        return redirect()->route('dashboard');
      }
        return redirect()->back();

    }

    public function logout(){
      Auth::logout();
      return redirect()->route('blogDashboard');
    }
}
