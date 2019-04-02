<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categorie::find($id);
        $news = News::where('category_id', $category->id)->get();
        return view('categories.show')->with('data', $news);
    }
}
