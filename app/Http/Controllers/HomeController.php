<?php

namespace App\Http\Controllers;

use App\News;
use App\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = News::with('categories')->get();;
        return view('home')->with('data', $data);;
    }

}
