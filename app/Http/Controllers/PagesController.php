<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


class PagesController extends Controller
{
    public function index(){
        //$title = "Welcome to Laravel!";
        //return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);  
    }

    public function about(){
        $title = "About Tonsberg International Training Center";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}
