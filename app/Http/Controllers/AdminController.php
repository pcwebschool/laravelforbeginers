<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Post;

class AdminController extends Controller
{
    /**
     * Autentificate User Check
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * This is the Admin View for the Posts
     *
     * @return void
     */
    public function posts()
    {   
        // $posts = \App\Post::first();
        // $posts = DB::table('posts')->get();
        $posts = Post::get();
        
        // return $posts;
        return view('posts', ['posts' => $posts]);
    }
}
