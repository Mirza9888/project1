<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create(){

        return view('posts.create');

    }

    public function store(Request $request){

 return $request->all() ;

    }
    //
}
