<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function getIndex() {
        // dd('news.index');
        return view('pages.news.index');
    }

    public function getCreate() {
        // dd('news.new');
        return view('pages.news.edit');
    }

    public function getDetail($id) {
        // dd($id);
        return view('pages.news.detail');
    }

    public function getEdit($id) {
        // dd($id);
        return view('pages.news.edit');
    }

    public function postSave(Request $r) {
        dd($r);

        // return redirect()->route('news.index');
    }
}
