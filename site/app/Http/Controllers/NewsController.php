<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function getIndex() {

        $blogs = Blog::get();

        return view('pages.news.index', [
            'blogs' => $blogs,
        ]);
    }

    public function getCreate() {

        return view('pages.news.edit');
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
        dd('delete');
    }

    public function postSave(Request $r) {

        if($r->hasFile('news_image')){
            $fileName = $r->news_image->getClientOriginalName();
            $r->news_image->storeAs('images', $fileName, 'public');
        }

        // dd($fileName);

        $r->validate([
            'news_image' => 'required',
            'news_title' => 'required',
            'news_synopsis' => 'required',
        ]);

        $data = [
            'image' => $fileName,
            'title' => $r->news_title,
            'synopsis' => $r->news_synopsis,
            'user_id' => 7,
        ];

        $blog = Blog::create($data);

        return redirect()->route('news.index');
    }
}
