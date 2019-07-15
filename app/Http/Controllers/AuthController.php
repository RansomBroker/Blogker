<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    //

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
}
