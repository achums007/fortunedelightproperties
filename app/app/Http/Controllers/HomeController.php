<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('service');
    }

    public function projects()
    {
        return view('project');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail($id)
    {
        // For demonstration, we can pass the ID to the view
        return view('blog-detail', ['id' => $id]);
    }
}
