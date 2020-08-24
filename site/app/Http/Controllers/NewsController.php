<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function getIndex() {

        // Van recent naar oud
        // $blogs = Blog::orderBy('created_at', 'desc')->get();

        $blogs = Blog::get();

        return view('pages.news.index', [
            'blogs' => $blogs,
        ]);
    }

    public function getCreate() {

        return view('pages.news.edit', ['blog' => null]);
    }

    public function getEdit(Blog $blog) {

        return view('pages.news.edit', [
            'blog' => $blog,
        ]);
    }

    public function getDetail(Blog $blog) {
        // dd($id);
        return view('pages.news.detail', [
            'blog' => $blog,
        ]);
    }

    public function getDelete($id) {
        // dd($id);
        $blog = Blog::where('id', $id)->first();
        $blog->delete();

        return redirect()->route('news.index');
    }

    public function postSave(Request $r) {

        $validationRules = [
            'news_image' => 'required',
            'news_title' => 'required',
            'news_synopsis' => 'required',
        ];

        if($r->hasFile('news_image')){
            $fileName = $r->news_image->getClientOriginalName();
            $r->news_image->storeAs('images', $fileName, 'public');
        }

        $r->validate($validationRules);

        $data = [
            'image' => $fileName,
            'title' => $r->news_title,
            'synopsis' => $r->news_synopsis,
        ];

        if($r->id) {
            // Klante updaten
            $blog = Blog::where('id', $r->id)->first();
            $blog->update($data);
        } else {
            // Nieuwe klant
            $blog = Blog::create($data);
        }

        return redirect()->route('news.index');
    }
}
