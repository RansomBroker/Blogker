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
        'upload-picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

    public function editProfile(Request $request){
      $validateData = $request->validate([
        'username' => 'required',
        'email' => 'required',
        'bio' => 'required',
        'password' => 'required|min:8|confirmed',
        'role' => 'required',
        'upload-picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      // dd($request->file('upload-picture'));

      // explode the role to array
      $role = explode(",", $request->role);
      // dd($role[0]);
      // destination
      $destinationUpload = 'img/profile';

      // storage to variable
      $fileUploadPicture = $request->file('upload-picture');
      // dd($fileUploadPicture);
      // create new name of file
      $profilePictureName = time()."_".$fileUploadPicture->getClientOriginalName();
      // uplaoad it
      $fileUploadPicture->move($destinationUpload, $profilePictureName);

      $updateProfile = User::find($request->userId);
      $updateProfile->role = $role[0];
      $updateProfile->image_profile = $profilePictureName;
      $updateProfile->username = $request->username;
      $updateProfile->email = $request->email;
      $updateProfile->password = $request->password;
      $updateProfile->description = $request->bio;
      $updateProfile->role_name = $role[1];
      $updateProfile->save();


      return redirect()->route('allUsers');

    }

    public function deleteProfile(Request $request){
      $id = $request->id;
      $user = User::findOrFail($id);
      $user->delete();
      $user = User::get();
      return response()->json(['success'=>'user deleted successfully']);
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
