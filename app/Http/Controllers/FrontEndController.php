<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\Facades\Image;

class FrontEndController extends Controller
{
    function readMore()
    {
        $allArticle = Article::all();
        return view('readMore', compact('allArticle'));
    }
    function articledetails($id)
    {
        $article = Article::findOrFail($id);
        $suggestion = Article::findOrFail(rand($id, Article::all()->count()));
        return view('articleDetails', compact('article', 'suggestion'));
    }
}
