<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
       $posts_info = DB::table('posts')->get();

       return view('pages.projects',compact('posts_info'));
    }
}
    