<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class HomeController extends Controller
{
    public function index()
    {

        $query = Blog::published();

        $blogs = $query->paginate(8);
        $featuredBlogs = Blog::published()->featured()->take(3)->get();
        $recentBlogs = Blog::published()->recent(5)->get();

        return view('home', compact('blogs', 'featuredBlogs', 'recentBlogs'));
    }
}
