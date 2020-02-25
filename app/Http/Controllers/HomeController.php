<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function bannerSettings()
    {

        return view('dashboard\bannerSettings');
    }
    function articleSettings()
    {
        $allArticle = Article::all();
        return view('dashboard\articleSettings',compact('allArticle'));
    }
    function savearticle(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'article' => 'required',
            'writer' => 'required'
        ]);

        $lastId = Article::insertGetId([
            'title' => $request->title,
            'photo' => $request->photo,
            'articleHint' => $request->articleHint,
            'article' => $request->article,
            'writer' => $request->writer
        ]);
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(2092, 1113)->save(base_path("public/frontEnd/uploads/article/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            Article::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            // echo $photoName;
        }

        return back()->with('greenStatus', 'Saved👍');
    }
    function deletearticle($id)
    {
        Article::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }








    // Class Ends Here
}
