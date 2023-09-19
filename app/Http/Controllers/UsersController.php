<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\NewUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function create(){

        return view('users.create');

    }

    public function store(Request $request){

  $validatedData=$request->validate([
      'name' => 'required',
      'user_type' => 'required|in:Customer,Support',

  ]);
  $user=NewUser::create($validatedData);

  return redirect ()->back()->with('success','New user is added');


    }

//    public function store(CreateUserRequest $request){
//
////$this->validate($request,[
////
////
////
////]);
//        Post::create($request->all());
//
//        return redirect('/navbar');
//
//    }
    //
    //
}
