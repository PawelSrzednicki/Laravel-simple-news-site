<?php

namespace App\Http\Controllers;

use App\News;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categorie::all();
        return view('news.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::user();
        $news =  new News();
        $news ->author = Auth::user()->name;
        $news -> user_id = Auth::user()->id;
        $news -> title = $request->get('title');
        $news -> description = $request->get('description');
        $news -> category_id = $request->get('categorie');

        $news->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', ['data' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', ['data' => $news])->with('categories', Categorie::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news -> author = Auth::user()->name;
        $news -> user_id = Auth::user()->id;
        $news -> title = $request->get('title');
        $news -> description = $request->get('description');
        $news -> category_id = $request->get('categorie');

        $news->update();

        return redirect()->route('user.news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('user.news');
    }
}
